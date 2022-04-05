import React from "react";
import '../styles/img.css'

import freeCodeCampLogo from '../img/freecodecamp-logo.png';

function Img({className, title}) {
    return(
        <div className='freecodecamp-logo-container'>
        <img
          className={className}
          src={freeCodeCampLogo}
          alt={title}
        />
      </div>
    );
}

export default Img