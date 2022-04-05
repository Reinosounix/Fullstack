import React from "react";
import '../styles/testimonio.css'

function Testimonio(props) {
  return (
    <div className='container-testimony'>
      <img className='img-testimony'
        src={require(`../images/testimonio-${props.img}.png`)}
        alt={`${props.img}`}
      />
      <div className='container-txt-testimony'>
        <p className='name-testimony'><strong>{props.name}</strong> de {props.country}</p>
        <p className='job-testimony'>{props.job} en <strong>{props.company}</strong></p>
        <p className='txt-testimony'>{props.testimony}</p>
      </div>
    </div>
  );
}

export default Testimonio
