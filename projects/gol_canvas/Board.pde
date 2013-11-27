class Board {
  int cell_dim;
  int n_x;
  int n_y;
  int timeStep;
  int lastTime;
  boolean bPlaying;
  
  Cell[][] cells;
  
  Board (int wide, int tall, int dim) {
    timeStep = 100;
    lastTime = millis();
    bPlaying = false;
    
    cell_dim = dim;
    n_x = wide;
    n_y = tall;
    
    cells = makeCells(n_x, n_y);
  }
  
  Board (int wide, int tall, int dim, int timeDelta) {
    timeStep = timeDelta;
    lastTime = millis();
    bPlaying = false;
    
    cell_dim = dim;
    n_x = wide;
    n_y = tall;
    
    cells = makeCells(n_x, n_y);
  }
  
  Cell[][] makeCells(int n_x, int n_y){
    // construct 2D array of cells 
    Cell[][] cells = new Cell[n_x][n_y];
    for(int i=0; i<n_x; i++) {
      for(int j=0; j<n_y; j++) {
        int state = getProbState();      
        cells[i][j] = new Cell(i * cell_dim, j * cell_dim, state, cell_dim); 
      }
    }
    return cells;
  }
  
  void togglePlaying () {
    if (bPlaying == false) {
      bPlaying = true;
    } else {
      bPlaying = false;
    }
  }
  
  void reset () {
    for ( int i=0; i<n_x; i++) {
      for ( int j=0; j<n_y; j++) {
        cells[i][j].curState = getProbState();    
      }
    }
  }
  
  int getProbState () {
    int percentageLive = 20; 
    if (random(100) < percentageLive) {
      return 1;
    } 
    else { 
      return 0;
    }
  
  }
  
  void draw() {
    // if playing update all cells every [timeStep] ms
    if ( bPlaying  ) {
      if ( millis() - lastTime > timeStep ) {
        update();
      }
    }
    
    background(125);
    // draw cells
    for(int i=0; i<n_x; i++) {
      for(int j=0; j<n_y; j++) {
        cells[i][j].draw();
      }
    }
  }
  
  void update () {
    for ( int i=0; i<n_x; i++) {
      for ( int j=0; j<n_y; j++) {
        int iup = i + 1;
        int idown = i - 1;
        int jup = j + 1;
        int jdown = j - 1;
        // bound x & y to board size
        if (iup >= n_x ) {
          iup = 0;          
        }
        if (idown < 0 ) {
          idown = n_x - 1;          
        }
        if (jup >= n_y ) {
          jup = 0;          
        }
        if (jdown < 0 ) {
          jdown = n_y - 1;
        }
                    
        // update nextState based on neighbours' curState
        cells[i][j].update(  cells[i][jup].curState,
                             cells[i][jdown].curState,
                             cells[iup][j].curState,
                             cells[idown][j].curState,
                             cells[iup][jup].curState,
                             cells[idown][jup].curState,
                             cells[iup][jdown].curState,
                             cells[idown][jdown].curState);
      } // for j
    } // for i
    
    // set curState to nextState
    for ( int i=0; i<n_x; i++) {
      for ( int j=0; j<n_y; j++) {
        cells[i][j].curState = cells[i][j].nextState;  
      }
    }
    lastTime = millis();
  }
  
  void fillCells (int state) {
    for(int i=0; i<n_x; i++) {
      for(int j=0; j<n_y; j++) {
        cells[i][j].curState = state;
      }
    }
  }
  
  void setUntoggled() {
    for(int i=0; i<n_x; i++) {
      for(int j=0; j<n_y; j++) {
        cells[i][j].setToggled(false);
      }
    }
  }
  
  // set a line of cells on board to [state]
  void markLine(int endI, int endJ, int state) {
    int minI = min(startI, endI);
    int minJ = min(startJ, endJ);
    int maxI = max(startI, endI);
    int maxJ = max(startJ, endJ);
  
    if ( indexOnBoard(endI, endJ) ) {
      // vertical
      if (startI == endI) {
        for ( int j = minJ; j<=maxJ; j++) {
          cells[startI][j].setState(state);
        }
      }
      // horizontal
      else if (startJ == endJ) {
        for ( int i = minI; i<=maxI; i++) {
          cells[i][startJ].setState(state);
        }
      }
      // diagonal
      // top left to bottom right
      else if (startI-endI == startJ-endJ) {
        for (int i = minI, j = minJ; i <= maxI; i++, j++) {
          cells[i][j].setState(state);
        }
      }
      // top right to bottom left
      else if (startI-endI == -1 * (startJ-endJ)) {
        for (int i = minI, j = maxJ; i <= maxI; i++, j--) {
          cells[i][j].setState(state);
        }
      }
    
      
    }
  }
}


