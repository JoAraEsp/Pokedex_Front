import Home from "./Home";
import NotFound from "./NotFound";
import { Routes, Route, Link } from "react-router-dom";
function App() {
    return (
        <div className="App">
          <Routes>
            <Route path="/home" element={<Home/>} />
            <Route path="*" element={<NotFound/>} />
          </Routes>
        </div>
      );
}

export default App;