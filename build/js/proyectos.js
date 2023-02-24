const proyectos = [
    {
  
      nombre: "Eugenia",
      class: "euge",
      addres: "CDMX",
      fIni: "2022-02-08",
      fFin: "2022-11-08",
      imagenes: [
        { img: '/build/img/euge-1.webp' },
        { img: '/build/img/euge-2.webp' },
        { img: '/build/img/euge-3.webp' },
        { img: '/build/img/euge-4.webp' },
        { img: '/build/img/euge-5.webp' },
        { img: '/build/img/euge-6.webp' },
        { img: '/build/img/euge-7.webp' },
        { img: '/build/img/euge-8.webp' },
        { img: '/build/img/euge-9.webp' },
        { img: '/build/img/euge-10.webp' }
      ]
    },
    {
  
      nombre: "Banquetas y Guarniciones",
      class: "banq",
      addres: "Av. Chapultepec",
      fIni: "2022-01-04",
      fFin: "2022-11-08",
      imagenes: [
        { img: '/build/img/banq-1.webp' },
        { img: '/build/img/banq-2.webp' },
        { img: '/build/img/banq-3.webp' },
        { img: '/build/img/banq-4.webp' },
        { img: '/build/img/banq-5.webp' }
      ]
    },
    {
  
      nombre: "Edificio",
      class: "pol",
      addres: "Polanco",
      fIni: "2022-07-06",
      fFin: "2023-01-02",
      imagenes: [
        { img: '/build/img/pol-1.webp' },
        { img: '/build/img/pol-2.webp' },
        { img: '/build/img/pol-3.webp' },
        { img: '/build/img/pol-4.webp' },
        { img: '/build/img/pol-5.webp' },
        { img: '/build/img/pol-6.webp' },
        { img: '/build/img/pol-7.webp' },
        { img: '/build/img/pol-8.webp' }
      ]
    },
    {
  
      nombre: "Impermeabilización y Pintura",
      addres: "Paseo de Lilas",
      class: "loze",
      fIni: "2021-01-12",
      fFin: "2022-06-16",
      imagenes: [
        { img: '/build/img/loze-1.webp' },
        { img: '/build/img/loze-2.webp' },
        { img: '/build/img/loze-3.webp' },
        { img: '/build/img/loze-4.webp' },
        { img: '/build/img/loze-5.webp' },
        { img: '/build/img/loze-6.webp' },
        { img: '/build/img/loze-7.webp' },
        { img: '/build/img/loze-8.webp' },
        { img: '/build/img/loze-9.webp' },
        { img: '/build/img/loze-10.webp' }
      ]
    }
    ,
    {
  
      nombre: "Fosa Septica",
      class: "fose",
      addres: "Sierra de la Breña, CdMx",
      fIni: "2022-04-04",
      fFin: "2022-04-04",
      imagenes: [
        { img: '/build/img/fose-1.webp' },
        { img: '/build/img/fose-2.webp' },
        { img: '/build/img/fose-3.webp' },
        { img: '/build/img/fose-4.webp' },
        { img: '/build/img/fose-5.webp' },
        { img: '/build/img/fose-6.webp' },
        { img: '/build/img/fose-7.webp' },
        { img: '/build/img/fose-8.webp' },
        { img: '/build/img/fose-9.webp' },
        { img: '/build/img/fose-10.webp' }
      ]
    },
    {
  
      nombre: "Remodelacion Jacuzzi",
      class: "jasa",
      addres: "Bosques de las Lomas, CDMX",
      fIni: "2022-09-26",
      fFin: "2022-11-11",
      imagenes: [
        { img: '/build/img/jasa-1.webp' },
        { img: '/build/img/jasa-2.webp' },
        { img: '/build/img/jasa-3.webp' },
        { img: '/build/img/jasa-4.webp' },
        { img: '/build/img/jasa-5.webp' },
        { img: '/build/img/jasa-6.webp' },
        { img: '/build/img/jasa-7.webp' },
        { img: '/build/img/jasa-8.webp' },
        { img: '/build/img/jasa-9.webp' },
        { img: '/build/img/jasa-10.webp' }
      ]
    },
    {
  
      nombre: "Rehabilitación del Edificio de Protección Civil",
      class: "sala",
      addres: "San Antonio La Isla, México",
      fIni: "2022-11-14",
      fFin: "2022-12-05",
      imagenes: [
        { img: '/build/img/sala-1.webp' },
        { img: '/build/img/sala-2.webp' },
        { img: '/build/img/sala-3.webp' },
        { img: '/build/img/sala-4.webp' },
        { img: '/build/img/sala-5.webp' },
        { img: '/build/img/sala-6.webp' },
        { img: '/build/img/sala-7.webp' }
      ]
    },
    {
  
      nombre: "Remodelación de Pisos Univar Solutions",
      class: "xalo",
      addres: "Xalostoc, Ecatepec, México",
      fIni: "2022-09-06",
      fFin: "2022-11-08",
      imagenes: [
        { img: '/build/img/xalo-1.webp' },
        { img: '/build/img/xalo-2.webp' },
        { img: '/build/img/xalo-3.webp' },
        { img: '/build/img/xalo-4.webp' },
        { img: '/build/img/xalo-5.webp' },
        { img: '/build/img/xalo-6.webp' },
        { img: '/build/img/xalo-7.webp' },
        { img: '/build/img/xalo-8.webp' },
        { img: '/build/img/xalo-9.webp' },
        { img: '/build/img/xalo-10.webp' }
      ]
    }
  ]; // Proyectos
  
  addEventListener('DOMContentLoaded', function () {
    crearGalerias();
    abrirGaleria();
  });
  //variables de iteracion
  var p = 0;
   
  function crearGalerias() {
    const cont = document.getElementById('cont');
    while (p < proyectos.length) {
      //crear la seeccion por obra
      let obras = document.createElement('section');
      obras.classList.add('pading-top');
      cont.append(obras);
      //crear div para el contenido de la obra
      let obra = document.createElement('div');
      obra.classList.add('obra', 'glass');
      obra.setAttribute("id",p)
      obras.append(obra);
      //crear div para el cotenido de los datos de la obra
      let datos = document.createElement("div");
      datos.classList.add("datos");
      datos.innerHTML = `
          <h3>Nombre:${proyectos[p].nombre}</h3>
          <label>Direción:${proyectos[p].addres}</label>
          <label>Fecha de Inicio:${proyectos[p].fIni}</label>
          <label>Fecha de Finalización:${proyectos[p].fFin}</label>
      `
      obra.append(datos);
      //crear la galeria para cada obra
      let galery = document.createElement("div")
      galery.classList.add("galery");
      obra.append(galery);
      //Agregar imagenes a la
      galerySize = proyectos[p].imagenes.length
      for(let i=0 ;i < galerySize ;i++) {
        const imagen = document.createElement("galery");
        imagen.classList.add("galery-i")
        imagen.innerHTML = ` 
            <picture id=${p}>
            <img loading="lazy" src="${proyectos[p].imagenes[i].img}" alt="imagen obra" id="${i}" class=${p}>
            </picture>
            `;
        galery.appendChild(imagen);
      }
      p++;
    }
  }
  function abrirGaleria() {
    const overlay = document.querySelector('.overlay');
    const imgSlide = document.querySelector('.img_slideshow');
    const contenedor = document.querySelector('.slideshow');
    const imagenes = document.querySelectorAll('.galery img');
  
  //agregar id al proyecto de igual modo a ala img
    Array.from(imagenes).forEach(img=> {
      img.addEventListener('click',e =>{
        const idGal = e.target.getAttribute('class');
        const idImg = e.target.id;
        const imgSrc = e.target.getAttribute('src');
        c = imgSrc;
        //mostrar overlayt al escuhar el evento clic
        overlay.style.opacity = 1;
        overlay.style.visibility = 'visible';
        //asignar imagen al elemento img del overlay
        imgSlide.setAttribute("src",imgSrc);
        imgSlide.setAttribute("id",idImg);
        //boton cerrar overlay
        document.querySelector('.btn_cerrar').addEventListener('click',()=>{
          overlay.style.opacity = 0;
          overlay.style.visibility = 'hidden';
          location.reload();
          });
          // recorrer arreglo
          contenedor.addEventListener('click', function(evnt){
            let atras = contenedor.querySelector('.atras'),
                adelante = contenedor.querySelector('.adelante'),
                img = contenedor.querySelector('img'),
                tgt = evnt.target;
                if(tgt == atras){
                    if(c > 0){
                        img.src = proyectos[idGal].imagenes[c-1].img;
                        c--;
                    }else{
                        img.src = proyectos[idGal].imagenes[proyectos[idGal].imagenes.length-1].img;
                        c = proyectos[idGal].imagenes.length -1;
                    }
                }else if(tgt == adelante){
                    if(c < proyectos[idGal].imagenes.length-1){
                        img.src = proyectos[idGal].imagenes[c+1].img;
                        c++;
                    }else{
                        img.src = proyectos[idGal].imagenes[0].img;
                        c = 0;
                    }
                }
          });
      });
    })
  }
  
  
  