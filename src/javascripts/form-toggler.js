
/**Forms toggler */
class FormsToggler {
    handleToggleHeroForms = (tabs, tab_content, active_class) => {
        tabs.length ? tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                tabs.forEach((t) => t.classList.remove(active_class));
                tab.classList.add(active_class);

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