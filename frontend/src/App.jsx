import './App.css'
import Card from './components/atoms/Card';
//import Router from './configuration/Router.jsx';

function App() {
  return (
    <>
      {/* <Router/> */}
      <Card 
        image='https://picsum.photos/300/150'
        title="Covid Tracker" 
        description="A React project with API consume including the Covid DATA" />

   </>
  );
}

export default App;
