import React, { Component } from 'react';
import {render} from 'react-dom';

class Header extends Component {
  constructor(){
    super();
    this.state = {
      page: "Login"
    };
  }
  render(){
    return (
      <LoginForm />
    )
  }
}
