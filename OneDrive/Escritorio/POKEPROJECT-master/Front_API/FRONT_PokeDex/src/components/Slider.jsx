import "../styles/Slider.css"
import Imagen1 from "../Imagenes/Usuario1.png"
import Imagen2 from "../Imagenes/Portada1.png"
import Imagen3 from "../Imagenes/Portada2.png"
import Imagen4 from "../Imagenes/Novedad2.jpg"
import Imagen5 from "../Imagenes/Usuario2.png"

function Slider() {
    return ( 
        <>
        <div class="wrapper">
  <div class="slider" id="slider">
    <ul class="slides">
      <li class="slide" id="slide1">
        <a href="#">
          <img src={Imagen1} alt="photo 1"></img>
        </a>
      </li>
      <li class="slide" id="slide2">
        <a href="#">
          <img src={Imagen2} alt="photo 2"></img>
        </a>
      </li>
      <li class="slide" id="slide3">
        <a href="#">
          <img src={Imagen3} alt="photo 3"></img>
        </a>
      </li>
      <li class="slide" id="slide4">
        <a href="#">
          <img src={Imagen4} alt="photo 4"></img>
        </a>
      </li>
      <li class="slide" id="slide5">
        <a href="#">
           <img src={Imagen5} alt="photo 5"></img>
        </a>
      </li>
      <li class="slide">
        <a href="#">
          <img src={Imagen1} alt="photo 1"></img>
        </a>
      </li>
    </ul>
    <ul class="slider-controler">
      <li><a href="#slide1">*</a></li>
      <li><a href="#slide2">*</a></li>
      <li><a href="#slide3">*</a></li>
      <li><a href="#slide4">*</a></li>
      <li><a href="#slide5">*</a></li>
    </ul>
  </div>
</div>
        </>
     );
}

export default Slider;