const greet = (element: HTMLButtonElement) => {


  
  const speak = () => {
    alert("Hello world!");
  };
  element.addEventListener("click", speak);
};

greet(document.querySelector<HTMLButtonElement | any>("#clickme_btn"));
