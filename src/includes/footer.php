<footer class="bg-dark text-gray-200 text-sm">

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-12">
        <ul class="grid grid-cols-12 gap-4 sm:gap-8">
            <li class="col-span-12 sm:col-span-3">
                <h6 class="sm:text-lg font-semibold mb-2 sm:mb-6">Foot Title</h6>
                <p class="leading-6">Vanlagos.com is a reliable vehicle hiring company that provides premium services to
                    our customers at an affordable and competitive market price.</p>
            </li>
            <li class="col-span-6 sm:col-span-3">
                <h6 class="sm:text-lg font-semibold mb-2 sm:mb-6">Quicklinks</h6>
                <ul class="leading-6 sm:leading-7">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </li>
            <li class="col-span-6 sm:col-span-3">
                <h6 class="sm:text-lg font-semibold mb-2 sm:mb-6">Contacts</h6>
                <ul class="leading-6 sm:leading-7">
                    <li>
                        Email: <a href="#" mailto:info@mainlandclinics.com>info@mainlandclinics.com</a></li>
                    <li>
                        Head Office: 148, Ikorodu road, shomolu.
                    </li>
                    <li>Phone number: 07084069904</li>
                </ul>
            </li>
            <li class="col-span-12 sm:col-span-3">
                <h6 class="sm:text-lg font-semibold mb-2 sm:mb-6">Newsletter</h6>
                <p class="leading-6 mb-4">Subscribe to our newsletters to get our latest health updates, promos and
                    discounts.
                </p>
                <form action="">
                    <div class="grouped-control h-8">
                        <input type="text" class="text-dark rounded transparent">
                        <!-- <input type="submit" value="Submit" class="button"> -->
                        <button class="button"></button>
                    </div>
                </form>
            </li>
        </ul>
    </div>

    <hr class="border-gray-500">
    <p class="text-center py-8">Van Lagos &copy; 2023</p>
</footer>



<!-- JQuery -->
<script src="./libs/jquery-3.7.1.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->

<!-- material design 3 -->
<script>
// mdc.ripple.MDCRipple.attachTo(document.querySelector('.foo-button'));
</script>
<!-- <script type="module" src="./libs/material-design/indes.js"></script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    const datepicker =
        document.querySelectorAll(".datepicker");
    console.log(datepicker);

    for (let i = 0; i < datepicker.length; i++) {
        const element = datepicker[i];
        console.log("element: ", element);
        var picker = new Pikaday({
            field: element,
            format: 'MM/DD/YYYY', // You can change the date format as per your requirements
        });


    }
});
</script>

<script src="./javascripts/main.jquery.js"></script>
<script src="./javascripts/main.js"></script>
</body>

</html>