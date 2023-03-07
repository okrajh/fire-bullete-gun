.gun {
  width: 50px;
  height: 30px;
  border: 1px solid black;
  position: relative;
}

.gun:before {
  content: '';
  width: 20px;
  height: 20px;
  background-color: gray;
  position: absolute;
  top: 5px;
  left: -15px;
  border-radius: 50%;
}

.gun:after {
  content: '';
  width: 5px;
  height: 10px;
  background-color: black;
  position: absolute;
  top: 10px;
  left: -5px;
  transform: rotate(-45deg);
}
