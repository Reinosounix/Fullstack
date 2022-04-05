import React from "react";
import '../styles/count.css'

function Count({numClicks}) {
  return (
    <div className='count'>
      {numClicks}
    </div>
  );

}

export default Count