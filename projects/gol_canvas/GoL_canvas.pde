/* 
 * Interactive Game of Life Canvas
 * en.wikipedia.org/wiki/Conways_Game_of_Life
 * 
 * Philo van Kemenade www.fromTIMEtoTI.ME
 * 
 * TODO
 * - separate mouseInterface Class
 * - communicate count down instructions 
 * - (invert black white)
 * - DEBUG lower right corner drag lines error
 * 
 * IDEAS
 * - Twitter Avatar uploader
 * - Rorschomaton symetrical pattern generator
 * - picture seed
 * - CA clock (walkers + circular states)  
 */

Board board;
boolean bShiftPressed = false;
boolean bShiftDragging = false;
boolean bHasMouseMoved = false;

int startI;
int startJ;

boolean bHelp;
int helpMillis;
int helpDelta;
int helpOriginX;
int helpOriginY;
int boxWidth;
int boxHeight;

String[][] commands;

PFont f;

void setup() {
  int n_x = 31;
  int n_y = 31;
  int dim = 20;
  int timeStep = 120;
  
  size(n_x * dim + 1, n_y * dim + 1);
  //noCursor();
    
  /// settings for helpScreen
  // timeout for help screen
  helpDelta = 10000;
  // helpOrigin is top-center point of bounding box
  helpOriginX = width/2;
  helpOriginY = height/16;
  boxWidth = 340;
  boxHeight = 14 * height / 16;
  
  board = new Board(n_x, n_y, dim, timeStep);
  
  // setup font
  f = createFont("Arial",16,true); // Arial, 20 point, anti-aliasing on
  
  // set instructions
  setInstructions();
  
  // show instructions
  startHelp();
}

void setInstructions() {
  commands = new String[11][2];
  commands[0][0]  = "[SPACE]";
  commands[0][1]  = "start / pause automaton";
  commands[1][0]  = "[RIGHT]";
  commands[1][1]  = "update automaton";
  commands[2][0]  = "['0']";
  commands[2][1]  = "fill cells dead";
  commands[3][0]  = "['1']";
  commands[3][1]  = "fill cells alive";
  commands[4][0]  = "['r']";
  commands[4][1]  = "fill cells randomly";
  commands[5][0]  = "['h','?']";
  commands[5][1]  = "instructions";
  commands[6][0]  = "";
  commands[6][1]  = "";
  commands[7][0]  = "[mouse click]";
  commands[7][1]  = "toggle cells";
  commands[8][0]  = "[mouse left drag]";
  commands[8][1]  = "draw live cells";
  commands[9][0]  = "[mouse right drag]";
  commands[9][1]  = "draw dead cells";
  commands[10][0] = "[SHIFT]";
  commands[10][1] = "hold to draw lines";
}
 

void draw() {
  board.draw();
  drawMouseInterface();
  drawPlayingState();
  
  // draw help screen for [helpMillis] ms if [h,?] pressed
  if (bHelp) {
    int helpShown =  millis() - helpMillis;
    if (helpShown < helpDelta) {
      drawBox();
      drawTitle(0, 60);
      drawInstructions(0, 160);
      drawCredits(0, 460);
      drawHelpCountdown(helpShown);
    }
    else {
      bHelp = false;
    }
  }
}

void drawTitle(int offsetX, int offsetY) {
  fill(255);
  textAlign(CENTER);
  
  // write header
  textFont(f, 20);
  text("Game of Life Canvas", helpOriginX + offsetX, helpOriginY + offsetY);
  
  // write sub header
  textFont(f, 12);
  text("Turning a zero-player game into an interactive experience", helpOriginX + offsetX, helpOriginY + offsetY + 40);
}

// draw bounding box of help screen
void drawBox() {
  rectMode(CENTER);  // Set rectMode to CENTER
  stroke(255,0,0, 200);
  fill(0,0,0, 0.7 * 255);
  rect(width/2, height/2, boxWidth, boxHeight);
  rectMode(CORNER);
}

//TODO pass origin param
void drawInstructions(int offsetX, int offsetY) {
  // draw instructions title
  fill(255);
  textAlign(CENTER);
  textFont(f, 20);
  text("Instructions", helpOriginX + offsetX, helpOriginY + offsetY);
  
  // write instructions
  textFont(f, 16);
  for (int i = 0; i < commands.length; i++) {
    String command = commands[i][0];
    String instruction = commands[i][1];
    textAlign(LEFT);
    text(command, helpOriginX + offsetX - 140, helpOriginY + offsetY + 40 + i * 20);
    textAlign(RIGHT);
    text(instruction, helpOriginX + offsetX + 140, helpOriginY + offsetY + 40 + i * 20);
  }
}

void drawCredits(int offsetX, int offsetY) {  
  fill(255);
  textAlign(CENTER);
  textFont(f, 20);
  text("By", helpOriginX + offsetX, helpOriginY + offsetY);
  textFont(f, 16);
  text("Philo van Kemenade", helpOriginX + offsetX, helpOriginY + offsetY + 40);
  text("www.fromTIMEtoTI.ME", helpOriginX + offsetX, helpOriginY + offsetY + 60);
}

void drawHelpCountdown(int helpShown) {
  stroke(0,0,0);
  
  float ratio = float(helpShown) / helpDelta;
  
  // calc which part of border to draw
  float topRatio = 0.5 * boxWidth / (boxWidth + boxHeight);
  float bottomRatio = topRatio;
  float sideRatio = float(boxHeight) / (boxWidth + boxHeight);
  float topAndSideRatio =  (0.5 * boxWidth + boxHeight) / (boxWidth + boxHeight);
  
  if ( ratio < topRatio ) {
    // draw topline
    float partOfTop = ratio / topRatio;
    float topLength = partOfTop * 0.5 * boxWidth;
    line(helpOriginX, helpOriginY, helpOriginX + topLength, helpOriginY);
    line(helpOriginX, helpOriginY, helpOriginX - topLength, helpOriginY);
  }
  else if ( ratio < topAndSideRatio ) {
    // draw top
    line(helpOriginX, helpOriginY, helpOriginX + 0.5 * boxWidth, helpOriginY);
    line(helpOriginX, helpOriginY, helpOriginX - 0.5 * boxWidth, helpOriginY);
    // draw sideline
    float partOfSide = (ratio - topRatio) / sideRatio;
    
    float sideLength = partOfSide * boxHeight;
    line(helpOriginX + 0.5 * boxWidth, helpOriginY, helpOriginX + 0.5 * boxWidth, helpOriginY + sideLength);
    line(helpOriginX - 0.5 * boxWidth, helpOriginY, helpOriginX - 0.5 * boxWidth, helpOriginY + sideLength);
  }
  else if ( ratio <= 1) {
    // draw top
    line(helpOriginX, helpOriginY, helpOriginX + 0.5 * boxWidth, helpOriginY);
    line(helpOriginX, helpOriginY, helpOriginX - 0.5 * boxWidth, helpOriginY);
    // draw sideline
    line(helpOriginX + 0.5 * boxWidth, helpOriginY, helpOriginX + 0.5 * boxWidth, helpOriginY + boxHeight);
    line(helpOriginX - 0.5 * boxWidth, helpOriginY, helpOriginX - 0.5 * boxWidth, helpOriginY + boxHeight);
    // draw bottom
    float partOfBottom = (ratio - topAndSideRatio) / bottomRatio;
    float bottomLength = partOfBottom * 0.5 * boxWidth;
    line(helpOriginX + 0.5 * boxWidth, helpOriginY + boxHeight, helpOriginX + 0.5 * boxWidth - bottomLength, helpOriginY + boxHeight);
    line(helpOriginX - 0.5 * boxWidth, helpOriginY + boxHeight, helpOriginX - 0.5 * boxWidth + bottomLength, helpOriginY + boxHeight);
  }   
}

void drawMouseInterface() {
  // draw hovered cell
  drawHover();
  // draw dragged lines  
  if ( bShiftDragging ) {
    drawLines();
  }
}

void drawPlayingState() {
  if (!board.bPlaying) {
    stroke(255, 0, 0);
    noFill();
    rect(0,0, board.n_x*board.cell_dim, board.n_y*board.cell_dim);
  }
}



void drawHover() {
  if( bHasMouseMoved ) {
    int i = getMouseI();
    int j = getMouseJ();
    int dim = board.cell_dim;
    if (indexOnBoard(i, j)) {
      int x = board.cells[i][j].x;
      int y = board.cells[i][j].y;
      stroke(255, 0, 0);
      noFill();
      rect(x, y, dim, dim);
      if (bShiftPressed) {
        // draw cross at hovered cell
        drawCross(x, y, x+dim, y+dim);
      }
    }
  }
  
}

void drawCross(int x1, int y1, int x2, int y2) {
  line(x1, y1, x2, y2);
  line(x1, y2, x2, y1);
}

void drawLines() {
  int endI = getMouseI();
  int endJ = getMouseJ();
  int dim = board.cell_dim;
  
  if ( indexOnBoard(endI, endJ) ) {
    stroke(255, 0, 0);
    noFill();
    
    // draw cross at start of line
    int startX = board.cells[startI][startJ].x;
    int startY = board.cells[startI][startJ].y;
    drawCross(startX, startY, startX + dim, startY + dim);
    
    int minI = min(startI, endI);
    int minJ = min(startJ, endJ);
    int maxI = max(startI, endI);
    int maxJ = max(startJ, endJ);
    
    // draw line strokes
    // vertical
    if (startI == endI) {
      for ( int j = minJ; j<=maxJ; j++) {
        int x = board.cells[startI][j].x;
        int y = board.cells[startI][j].y;
        
        rect(x, y, dim, dim);
      }
    }
    // horizontal
    else if (startJ == endJ) {
      for ( int i = minI; i<=maxI; i++) {
        int x = board.cells[i][startJ].x;
        int y = board.cells[i][startJ].y;
        rect(x, y, dim, dim);
      }
    }
    //diagonal
    
    // top left to bottom right
    else if (startI-endI == startJ-endJ) {
      for (int i = minI, j = minJ; i <= maxI; i++, j++) {
          int x = board.cells[i][j].x;
          int y = board.cells[i][j].y;
          rect(x, y, dim, dim);
      }
    }
    // top right to bottom left
    else if (startI-endI == -1 * (startJ-endJ)) {
      for (int i = minI, j = maxJ; i <= maxI; i++, j--) {
          int x = board.cells[i][j].x;
          int y = board.cells[i][j].y;
          rect(x, y, dim, dim);
      }
    }
  }
}

void startHelp() {
  bHelp = true;
  helpMillis = millis();
}

void mouseMoved() {
  bHasMouseMoved = true;
}

void mousePressed() {
  // TODO fix bug; drawing freezes when mousePressed on bottom right cell   
  
  int i = getMouseI();
  int j = getMouseJ();
  
  if ( bShiftPressed ) {
    // set start coords for line drawing
    startI = i;
    startJ = j;
  }
  else {
    // set state of hovered cell 1 or 0 by mouseclicks
    if ( indexOnBoard(i, j) ) {
      board.cells[i][j].toggleState();
    }
  }
}

void mouseDragged() {
  // set lines
  if ( bShiftPressed ) {
    bShiftDragging = true;
  }
  // set drawn cells
  else {
    int i = getMouseI();
    int j = getMouseJ();
    if ( indexOnBoard(i, j) ) {
      if (mouseButton == LEFT) {
        board.cells[i][j].setState(1);
      }
      else if ( mouseButton == RIGHT) {
        board.cells[i][j].setState(0);
      }
    }
  }
}

void mouseReleased() {
  bShiftDragging = false;
  int i = getMouseI();
  int j = getMouseJ();
  
  if ( bShiftPressed ) {
    int endI = i;
    int endJ = j;
    if (mouseButton == LEFT) {
      board.markLine(endI, endJ, 1);
    }
    else if ( mouseButton == RIGHT) {
      board.markLine(endI, endJ, 0);
    }
  }
}

// return board index I of mouse
int getMouseI () {
  return floor(mouseX / board.cell_dim);
}

// return board index J of mouse
int getMouseJ () {
  return floor(mouseY / board.cell_dim);
}

// check if index (i,j) is on board
boolean indexOnBoard(int i, int j ) {
  if ( i >= 0 && i < board.n_x ) {
    if ( j >= 0 && j < board.n_y ) {
      return true;
    }
  }
  return false;
}

void keyPressed() {
  if (key == CODED) {
    if (keyCode == SHIFT) {
      bShiftPressed = true;
    }
    if (keyCode == RIGHT) {
      board.update();
    }
  }
  if (key == ' ') {
    board.togglePlaying();
  } 
  else if (key == 'r') {
    board.reset();
  } 
  else if (key == '0') {
    board.fillCells(0);
  } 
  else if (key == '1') {
    board.fillCells(1);
  }
  else if (key == '/' || key == 'h' || key == '?') {
    if (bHelp) {
      bHelp = false;
    }
    else {
      startHelp();
    }
    
  }
}

void keyReleased() {
  if (key == CODED) {
    if (keyCode == SHIFT) {
      bShiftPressed = false;
      bShiftDragging = false;
    }
  }
  
}

