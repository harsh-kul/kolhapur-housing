<style>
        * {
    box-sizing:border-box;
    margin:0;
    padding:0;
  }
  
  html,
  body {
    height:100%;
  }
  
  .loadingScreen {
     width: 100%;
     height: 100%;
    background-color:hsl(220, 100%, 4%);
    display:grid;
    place-items:center;
  }
  
  .container-loader {
    width:80px;
    height:80px;
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:0.3rem;
    transform:rotate(-45deg);
  }
  
  .square {
    background-color:white;
    display:grid;
    place-items:center;
    border-radius:5px;
    animation:load 1.6s ease infinite;
  }
  
  @keyframes load {
    0% {
      transform:scale(1);
    }
    50% {
      transform:scale(0);
      background-color:var(--color);
    }
    100% {
      transform:scale(1);
    }
  }
  
  .one {
    --color:magenta;
  }
  
  .two {
    animation-delay:0.1s;
    --color:lime;
  }
  
  
  .three {
    animation-delay:0.2s;
    --color:blue;
  }
  
  
  .four {
    animation-delay:0.3s;
    --color:yellow;
  }
  
  
  .five {
    animation-delay:0.4s;
    --color:orange;
  }
    </style>
    <div class="loadingScreen">

   
<div class="container-loader">
  <div class="square one"></div>
  <div class="square two"></div>
  <div class="square three"></div>
  <div class="square two"></div>
  <div class="square three"></div>
  <div class="square four"></div>
  <div class="square three"></div>
  <div class="square four"></div>
  <div class="square five"></div>
  
</div>
</div>