import React, { Component } from 'react';
import {render} from 'react-dom';

class App extends Component {
  render(){
    var place ="World";
    return (
      <Header />
    );
  }
}

render(<App />, document.getElementById('app'));
