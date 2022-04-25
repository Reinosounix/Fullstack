const myFurniture = new furniture("Maple", "128", "130", "230","200")

function furniture(woodType, lenght, width, height, price) {
  this.woodType = woodType;
  this.lenght = lenght+"cm";
  this.width = width+"cm";
  this.height = height+"cm";
  this.price = price;
  this.newPrice = (discount) => {
    this.price = (price - (price * (discount/100)))
  }
}

const paragraph = document.querySelector("p");
const text = `Wood Type: ${myFurniture.woodType}`
paragraph.innerHTML = text 

