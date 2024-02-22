console.log("Hi Programmer!!!");

class Main {
  constructor() {}
  // const greet = (element: HTMLButtonElement) => {
  //   const speak = () => {
  //     alert("Hello world!");
  //   };
  //   element?.addEventListener("click", speak);
  // };

  // greet(document.querySelector<HTMLButtonElement | any>("#clickme_btn"));

  //

  toggleHeroForms = (tabs: any, tab_content: any) => {
    console.log(tabs);
    tabs.forEach((tab: any) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t: any) => t.classList.remove("active"));
        tab.classList.add("active");

        const targetTabId = tab.getAttribute("data-tab");
        const tabContents = tab_content;
        tabContents.forEach((content) => {
          content.classList.toggle("hidden", content.id !== targetTabId);
        });
      });
    });
  };
}

const main_toggleHeroForms = new Main();
main_toggleHeroForms.toggleHeroForms(
  document.querySelectorAll<any>(".tab-btn"),
  document.querySelectorAll<any>(".tab-content")
);
// 
const toggle_daily_hourly_Forms = new Main();
toggle_daily_hourly_Forms.toggleHeroForms(
  document.querySelectorAll<any>(".vh-tab-btn"),
  document.querySelectorAll<any>(".vh-tab-content")
);

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
