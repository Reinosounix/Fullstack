import { useState } from 'react';

import './App.css';


import Button from './components/Button'
import Count from './components/Count';
import Img from './components/Img';

function App() {

  const [numClicks, setNumClicks] = useState(0);

  const clickManager = () => {
    setNumClicks(numClicks + 1);
  };

  const resetCount = () => {
    setNumClicks(0);
  };

  return (
    <div className='App'>
      <Img
        className='freecodecamp-logo'
        alt='freecodecamp logo'
      />
      <div className='container'>
        <Count numClicks={numClicks} />
        <Button
          text='Clic'
          buttonClick={true}
          clickManager={clickManager}
        />
        <Button
          text='Reiniciar'
          buttonClick={false}
          clickManager={resetCount}
        />
      </div>
    </div>
  );
}

export default App;
