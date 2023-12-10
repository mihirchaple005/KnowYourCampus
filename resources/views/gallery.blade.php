<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .gallery {
  --s: 130px; /* control the size of the images*/
  
  display: grid;
  grid-template-columns: repeat(3,auto);
  gap: 5px;
  position: relative;
}
.gallery input {
  position: absolute;
  border: 2px solid #000;
  border-radius: 50%;
  inset: calc(50% - var(--s)/3);
  cursor: pointer;
  --g: linear-gradient(#000 0 0) no-repeat;
  background: var(--g) 50%/var(--b,0%) 3px,var(--g) 50%/3px var(--b,0%);
  transition: 1.5s;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.gallery > img {
  width: var(--s);
  aspect-ratio: 1;
  object-fit: cover;
  transform: scale(.1);
  filter: brightness(0);
  pointer-events: none;
  transform-origin: var(--x) var(--y);
  transition: 1s calc((var(--i) - 1)*.1s);
}
.gallery > img:nth-of-type(1) {--i:1;--x: 150%;--y:150%;}
.gallery > img:nth-of-type(2) {--i:2;--x:  50%;--y:150%;}
.gallery > img:nth-of-type(3) {--i:3;--x: -50%;--y:150%;}
.gallery > img:nth-of-type(4) {--i:4;--x: 150%;--y:50%; }
.gallery > img:nth-of-type(5) {--i:5 }
.gallery > img:nth-of-type(6) {--i:6;--x: -50%;--y:50%; }
.gallery > img:nth-of-type(7) {--i:7;--x: 150%;--y:-50%;}
.gallery > img:nth-of-type(8) {--i:8;--x:  50%;--y:-50%;}
.gallery > img:nth-of-type(9) {--i:9;--x: -50%;--y:-50%;}

.gallery > input:checked ~ img {
  transform: scale(1);
  filter: brightness(1);
  pointer-events: initial;
}
.gallery > input:checked {
  transform: translateY(calc(1.75*var(--s))) scale(.5) rotate(45deg);
  --b: 70%;
}



body {
  margin: 0;
  min-height: 100vh;
  display: grid;
  place-content: center;
  background: #83AF9B;
}
    </style>
</head>
<body>
    <div class="gallery">
        <input type="checkbox">
        <img src="https://picsum.photos/id/1028/300/300" alt="a forest after an apocalypse" onclick="openChirpWindow(1)">
<img src="https://picsum.photos/id/15/300/300" alt="a waterfall and many rocks" onclick="openChirpWindow(2)">
<img src="https://picsum.photos/id/1040/300/300" alt="a house on a mountain" onclick="openChirpWindow(3)">
<img src="https://picsum.photos/id/106/300/300" alt="some pink flowers" onclick="openChirpWindow(4)">
<img src="https://picsum.photos/id/136/300/300" alt="big rocks with some trees" onclick="openChirpWindow(5)">
<img src="https://picsum.photos/id/1039/300/300" alt="a waterfall, a lot of tree and a great view from the sky" onclick="openChirpWindow(6)">
<img src="https://picsum.photos/id/110/300/300" alt="a cool landscape" onclick="openChirpWindow(7)">
<img src="https://picsum.photos/id/1047/300/300" alt="inside a town between two big buildings" onclick="openChirpWindow(8)">
<img src="https://picsum.photos/id/1057/300/300" alt="a great view of the sea above the mountain" onclick="openChirpWindow(9)">

    </div>

    <script>
        function openChirpWindow(imageNumber) {
    let chirpRoute = "{{ route('chirp.show', ['id' => ':imageNumber']) }}";
    chirpRoute = chirpRoute.replace(':imageNumber', imageNumber);

    window.open(chirpRoute, '_blank');
}

    </script>
</body>
</html>
