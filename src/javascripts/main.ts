
console.log("Hi Programmer!!!")

const greet = (element: HTMLButtonElement) => {  
  const speak = () => {
    alert("Hello world!");
  };
  element?.addEventListener("click", speak);
};

greet(document.querySelector<HTMLButtonElement | any>("#clickme_btn"));


// 

const toggleHeroForms = (tabs:any)=>{
  console.log(tabs)
  tabs.forEach((tab:any)=>{
    console.log(tab)
    tab.addEventListener('click',()=>{
              tabs.forEach((t:any) => t.classList.remove('active'));
              tab.classList.add('active');
      
              const targetTabId = tab.getAttribute('data-tab');
              const tabContents = document.querySelectorAll('.tab-content');
              tabContents.forEach(content => {
                  content.classList.toggle('hidden', content.id !==
                      targetTabId);
              });
    })
  })
}

toggleHeroForms(document.querySelectorAll<any>('.tab-btn'))



// const tabs = document.querySelectorAll('.tab-btn');
// tabs.forEach(tab => {
//     tab.addEventListener('click', () => {
//         tabs.forEach(t => t.classList.remove('active'));
//         tab.classList.add('active');

//         const targetTabId = tab.getAttribute('data-tab');
//         const tabContents = document.querySelectorAll('.tab-content');
//         tabContents.forEach(content => {
//             content.classList.toggle('hidden', content.id !==
//                 targetTabId);
//         });
//     });
// });