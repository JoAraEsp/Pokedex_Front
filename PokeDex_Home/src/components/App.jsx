import Home from "./Home";
import NotFound from "./NotFound";
import BodyHome from "./BodyHome";
import { Routes, Route, Link } from "react-router-dom";
function App() {
    return (
        <div className="App">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="*" element={<NotFound/>} />
            <Route path="/body" element={<BodyHome/>}/>
          </Routes>
        </div>
      );
}

export default App;