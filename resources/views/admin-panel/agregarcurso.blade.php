@extends('admin-panel.dashboard panel.dashnav')
<link rel="{{asset('css/formulario.css')}}" href="">
@section('contenido')
<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
      <form id="formulariocursos" action="{{ route('formulario_cursos') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="formbold-steps">
              <ul>
                  <li class="formbold-step-menu1 active">
                      <span>1</span>
                      Información
                  </li>
                  <li class="formbold-step-menu2">
                      <span>2</span>
                      Descripcion
                  </li>
                  <li class="formbold-step-menu3">
                      <span>3</span>
                      Guardar
                  </li>
              </ul>
          </div>
  
          <div class="formbold-form-step-1 active">
            <div class="formbold-input-flex">
              <div>
                  <label for="nombre" class="formbold-form-label"> Título del curso </label>
                  <input
                  required
                  type="text"
                  name="nombre"
                  placeholder="Ingresa el título del curso"
                  id="Inpnombre"
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="lastname" class="formbold-form-label"> Nivel </label>
                  <select name="nivel" class="formbold-form-input" id="">
                    <option value="Basico">Basico</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                  </select>
              </div>
            </div>
    
            <div class="formbold-input-flex">
                <div>
                    <label for="dob" class="formbold-form-label"> Fecha de inicio </label>
                    <input
                    required 
                    type="date" 
                    name="fecha_inicio" 
                    id="fecha_inicio" 
                    class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="duracion" class="formbold-form-label"> Duración </label>
                    <input
                    required
                    type="text"
                    name="duracion"
                    placeholder="Ingresa el numero de horas"
                    id="duracion"
                    class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                  <label for="precio" class="formbold-form-label"> Precio </label>
                  <input
                  required 
                  type="number" 
                  name="precio" 
                  id="precio" 
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="instructor" class="formbold-form-label"> Instructor </label>
                  <select name="maestro" id="maestro" class="formbold-form-input">
                    @foreach ($maestros as $maestro)
                        <option value="{{ $maestro->clave }}" data-nombre="{{ $maestro->nombre_completo }}">{{ $maestro->nombre_completo }}</option>
                    @endforeach
                </select>
              </div>
          </div>
  
            
          </div>
  
          <div class="formbold-form-step-2">
            <div>
              <label for="descripcion" class="formbold-form-label"> Descripción </label>
              <textarea rows="6" name="descripcion" id="descripcion" placeholder="Añade una descripcion de lo que trata el curso" class="formbold-form-input" maxlength="900"></textarea>
              <p id="descripcion-character-count">Caracteres restantes: 900</p>
            </div>
          </div>
  
          <div class="formbold-form-step-3">
            <div class="formbold-form-confirm">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
              </p>
            </div>
            
          </div>
  
          <div class="formbold-form-btn-wrapper">
            <button class="formbold-back-btn">
              Atras
            </button>
  
            <button class="formbold-btn">
                Siguiente
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1675_1807)">
                <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_1675_1807">
                <rect width="16" height="16" fill="white"/>
                </clipPath>
                </defs>
                </svg>
            </button>
          </div>
      </form>
    </div>
  </div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: "Inter", sans-serif;
    }
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }
  
    .formbold-form-wrapper {
      margin: 0 auto;
      /* max-width: 550px; */
      width: 100%;
      background: white;
    }
  
    .formbold-steps {
      padding-bottom: 18px;
      margin-bottom: 35px;
      border-bottom: 1px solid #DDE3EC;
    }
    .formbold-steps ul {
      padding: 0;
      margin: 0;
      list-style: none;
      display: flex;
      gap: 40px;
    }
    .formbold-steps li {
      display: flex;
      align-items: center;
      gap: 14px;
      font-weight: 500;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-steps li span {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #DDE3EC;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      font-weight: 500;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-steps li.active {
      color: #07074D;;
    }
    .formbold-steps li.active span {
      background: #6A64F1;
      color: #FFFFFF;
    }
  
    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 22px;
    }
    .formbold-input-flex > div {
      width: 50%;
    }
    .formbold-form-input {
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #DDE3EC;
      background: #FFFFFF;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
      color: #07074D;
      font-weight: 500;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }
  
    .formbold-form-confirm {
      border-bottom: 1px solid #DDE3EC;
      padding-bottom: 35px;
    }
    .formbold-form-confirm p {
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      margin-bottom: 22px;
      width: 75%;
    }
    .formbold-form-confirm > div {
      display: flex;
      gap: 15px;
    }
  
    .formbold-confirm-btn {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #FFFFFF;
      border: 0.5px solid #DDE3EC;
      border-radius: 5px;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      cursor: pointer;
      padding: 10px 20px;
      transition: all .3s ease-in-out;
    }
    .formbold-confirm-btn {
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
    }
    .formbold-confirm-btn.active {
      background: #6A64F1;
      color: #FFFFFF;
    }
  
    .formbold-form-step-1,
    .formbold-form-step-2,
    .formbold-form-step-3 {
      display: none;
    }
    .formbold-form-step-1.active,
    .formbold-form-step-2.active,
    .formbold-form-step-3.active {
      display: block;
    }
  
    .formbold-form-btn-wrapper {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 25px;
      margin-top: 25px;
    }
    .formbold-back-btn {
      cursor: pointer;
      background: #FFFFFF;
      border: none;
      color: #07074D;
      font-weight: 500;
      font-size: 16px;
      line-height: 24px;
      display: none;
    }
    .formbold-back-btn.active {
      display: block;
    }
    .formbold-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 500;
      background-color: #6A64F1;
      color: white;
      cursor: pointer;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  
  </style>
  <script>
    const Inpnombre = document.getElementById("formulariocursos").value;

    const descripcionTextarea = document.getElementById("descripcion");
    const descripcionCharactersCount = document.getElementById("descripcion-character-count")

    const stepMenuOne = document.querySelector('.formbold-step-menu1')
    const stepMenuTwo = document.querySelector('.formbold-step-menu2')
    const stepMenuThree = document.querySelector('.formbold-step-menu3')
  
    const stepOne = document.querySelector('.formbold-form-step-1')
    const stepTwo = document.querySelector('.formbold-form-step-2')
    const stepThree = document.querySelector('.formbold-form-step-3')
  
    const formSubmitBtn = document.querySelector('.formbold-btn')
    const formBackBtn = document.querySelector('.formbold-back-btn')

    const formulariocursos = document.getElementById("formulariocursos")

    descripcionTextarea.addEventListener("input", function () {
      const remainingChars = descripcionTextarea.maxLength - descripcionTextarea.value.length;
      if (remainingChars >= 0) {
        descripcionCharactersCount.textContent = `Caracteres restantes: ${remainingChars}`;
      } else {
        descripcionCharactersCount.textContent = "Has excedido el limite de caracteres."
      }
    })
  
    formSubmitBtn.addEventListener("click", function(event){
      event.preventDefault()
      if(stepMenuOne.className == 'formbold-step-menu1 active') {
          event.preventDefault()
  
          stepMenuOne.classList.remove('active')
          stepMenuTwo.classList.add('active')
  
          stepOne.classList.remove('active')
          stepTwo.classList.add('active')
  
          formBackBtn.classList.add('active')
          formBackBtn.addEventListener("click", function (event) {
            event.preventDefault()
  
            stepMenuOne.classList.add('active')
            stepMenuTwo.classList.remove('active')
  
            stepOne.classList.add('active')
            stepTwo.classList.remove('active')
  
            formBackBtn.classList.remove('active')
  
          })
  
        } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
          event.preventDefault()
  
          stepMenuTwo.classList.remove('active')
          stepMenuThree.classList.add('active')
  
          stepTwo.classList.remove('active')
          stepThree.classList.add('active')
  
          formBackBtn.classList.remove('active')
        
          formBackBtn.classList.remove('active')
          formSubmitBtn.textContent = 'Guardar'

        } else if(stepMenuThree.className == 'formbold-step-menu3 active') { 
          // document.classList.add('active')
          if (Inpnombre == "") {
            alert("ALGUNOS CAMPOS SON OBLIGATORIOS");
            alert("No me importa fracasado")
            
          } else {
            document.getElementById('formulariocursos').submit();
          }
          
        }
    })
        
  </script>
@endsection