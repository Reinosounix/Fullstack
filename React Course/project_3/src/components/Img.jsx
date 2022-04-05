import React from "react";
import '../styles/img.css'

function Img({ className, src, alt }) {
  return (
    <div className='freecodecamp-logo-container'>
      <img
        className={className}
        src={require(`../img/${src}.png`)}
        alt={alt}
      />
    </div>
  );
}

export default Img;
