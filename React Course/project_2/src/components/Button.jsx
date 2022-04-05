import React from "react";
import '../styles/button.css'

function Button({ text, buttonClick, clickManager}) {
  return (
    <button
      className={buttonClick ? 'click-button' : 'reset-button'}
      onClick={clickManager}>
      {text}
    </button>
  );
}

export default Button