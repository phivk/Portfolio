class Cell {
  int x, y;
  int curState, nextState;
  int dim = 10;
  boolean bToggled = false;
  
  Cell (int x, int y) {
    x = x;
    y = y;
    curState = 0;
  }
  
  Cell (int xpos, int ypos, int cell_state) {
    x = xpos;
    y = ypos;
    curState = cell_state;
  }
  
  Cell (int xpos, int ypos, int cell_state, int dimension) {
    x = xpos;
    y = ypos;
    curState = cell_state;
    dim = dimension;
  }
  
  void update (int s1, int s2, int s3, int s4, int s5, int s6, int s7, int s8) {
    // set nextState, update current state according to rules
    nextState = conway(s1, s2, s3, s4, s5, s6, s7, s8);
  }
  
  int getState() {
    return curState;
  }
  
  void setState(int state) {
    curState = state;
  }
  
  void toggleState() {
    if ( curState == 0 ) {
      curState = 1;
    }
    else {
      curState = 0;
    }
    setToggled(true);
  }
  
  void setToggled (boolean state) {
    bToggled = state;
  }
  
  boolean isToggled() {
    return bToggled;
  }

  
  //conways game of life rule
  int conway (int s1, int s2, int s3, int s4, int s5, int s6, int s7, int s8) {
    int neighbours = s1 + s2 + s3 + s4 + s5 + s6 + s7 + s8;
    int s = 0;
    if ( curState == 1 ) {
      // live cell
      
      // Any live cell with fewer than two live neighbours dies, 
      // as if caused by under-population.
      if ( neighbours < 2 ) {
        s = 0;
      }
      // Any live cell with more than three live neighbours dies, 
      // as if by overcrowding.
      else if (neighbours > 3 ) {
        s = 0;
      }
      // Any live cell with two or three live neighbours lives on to the next generation.
      else {
        s = 1;
      }
    }
    else {
      // dead cell

      // Any dead cell with exactly three live neighbours becomes a live cell, 
      // as if by reproduction.
      if ( neighbours == 3 ) {
        s = 1;
      }
    }
    return s;
  }
  
  void draw () {
    stroke(125);
    fill(curState * 255);    
    rect(x, y, dim, dim);
  }
  
}
