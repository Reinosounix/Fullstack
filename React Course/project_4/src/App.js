import './App.css';

import Img from './components/Img';
import TaskList from './components/TaskList';

function App() {
  return (
    <div className="App">
      <Img
        className='freecodecamp-logo'
        src='freecodecamp-logo'
        alt='freecodecamp logo'
      />
      <div className='container'>
        <h1>Mis Tareas</h1>
        <TaskList />
      </div>
    </div>
  );
}

export default App;
