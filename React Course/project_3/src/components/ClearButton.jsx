import React from 'react'

import '../styles/clearbutton.css'

const ClearButton = (props) => {
  return (
    <div
      className='btn-clear'
      onClick={props.manageClear}
    >
      {props.children}
    </div>
  )
}

export default ClearButton