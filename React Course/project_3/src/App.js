import { useState } from 'react';
import { evaluate } from "mathjs";

import Img from './components/Img';
import Button from './components/Button';
import Screen from './components/Screen';
import ClearButton from './components/ClearButton';

import './App.css';

function App() {

  const [input, setInput] = useState('');

  const addInput = value => {
    setInput(input + value);
  };

  const result = () => {
    if (input){
      setInput(evaluate(input))
    } else {
      setInput('Ingrese valores')
    }
  };

  return (
    <div className="App">
      <Img
        className='freecodecamp-logo'
        src='freecodecamp-logo'
        alt='freecodecamp logo'
      />
      <div className='container'>
        <Screen input={input} />
        <div className='row'>
          <Button manageClick={addInput}>1</Button>
          <Button manageClick={addInput}>2</Button>
          <Button manageClick={addInput}>3</Button>
          <Button manageClick={addInput}>+</Button>
        </div>
        <div className='row'>
          <Button manageClick={addInput}>4</Button>
          <Button manageClick={addInput}>5</Button>
          <Button manageClick={addInput}>6</Button>
          <Button manageClick={addInput}>-</Button>
        </div>
        <div className='row'>
          <Button manageClick={addInput}>7</Button>
          <Button manageClick={addInput}>8</Button>
          <Button manageClick={addInput}>9</Button>
          <Button manageClick={addInput}>*</Button>
        </div>
        <div className='row'>
          <Button manageClick={result}>=</Button>
          <Button manageClick={addInput}>0</Button>
          <Button manageClick={addInput}>.</Button>
          <Button manageClick={addInput}>/</Button>
        </div>
        <div className='row'>
          <ClearButton
            manageClear={() => setInput('')}>
            Clear
          </ClearButton>
        </div>
      </div>

    </div>
  );
}

export default App;
