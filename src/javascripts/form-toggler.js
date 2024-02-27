
/**Forms toggler */
class FormsToggler {
    handleToggleHeroForms = (tabs, tab_content) => {
        console.log("tabs: ", tabs);
        tabs.length ? tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                tabs.forEach((t) => t.classList.remove("active"));
                tab.classList.add("active");

                const targetTabId = tab.getAttribute("data-tab");
                const tabContents = tab_content;
                tabContents.forEach((content) => {
                    content.classList.toggle("hidden", content.id !== targetTabId);
                });
            });
        }): null
    };
}


export default FormsToggler;