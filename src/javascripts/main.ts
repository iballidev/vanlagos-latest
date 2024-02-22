console.log("Hi Programmer!!!");

class Main {
  constructor() { }
  // const greet = (element: HTMLButtonElement) => {
  //   const speak = () => {
  //     alert("Hello world!");
  //   };
  //   element?.addEventListener("click", speak);
  // };

  // greet(document.querySelector<HTMLButtonElement | any>("#clickme_btn"));

  //

  handleToggleHeroForms = (tabs: any, tab_content: any) => {
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


  handleAnimateOnViewportIntercept = () => {
    const faders = document.querySelectorAll(".fade-in");
    const fromLeft = document.querySelectorAll(".from-left");
    const fromRight = document.querySelectorAll(".from-right");
    const fromBottom = document.querySelectorAll(".from-bottom");
    const fromTop = document.querySelectorAll(".from-top");
    const sliders = document.querySelectorAll(".slide-in");


    const appearOptions = {
      threshold: 0,
      rootMargin: "0px 0px -100px 0px"
    };
    const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
      entries.forEach((entry) => {
        console.log("entry: ", entry.target)
        let dataDelay = entry.target.getAttribute("data-delay");
        console.log("dataDelay: ", dataDelay)
        if (!entry.isIntersecting) return;

        if (dataDelay) {
          setTimeout(() => {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
          }, parseInt(dataDelay));
        } else {
          entry.target.classList.add("appear");
          appearOnScroll.unobserve(entry.target);
        }
      });
    }, appearOptions);

    faders.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromLeft.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromRight.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromTop.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromBottom.forEach((fader) => {
      appearOnScroll.observe(fader);
    });

    sliders.forEach((slider) => {
      appearOnScroll.observe(slider);
    });
  }
}


const init = new Main();
init.handleAnimateOnViewportIntercept();

const main_toggleHeroForms = new Main();
main_toggleHeroForms.handleToggleHeroForms(
  document.querySelectorAll<any>(".tab-btn"),
  document.querySelectorAll<any>(".tab-content")
);
// 
const toggle_daily_hourly_Forms = new Main();
toggle_daily_hourly_Forms.handleToggleHeroForms(
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




