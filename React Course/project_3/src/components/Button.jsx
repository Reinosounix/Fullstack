import React from "react";

import '../styles/button.css'

function Button(props) {

  const isMathOp = value => {
    return isNaN(value) && (value !== '.') && (value !== '=');
  }

  return (
    <div
      className={`button-container ${isMathOp(props.children) ? 'operator' : ''}`.trimEnd()}
      onClick={() => props.manageClick(props.children)}>
      {props.children}
    </div>
  );
}

export default Button