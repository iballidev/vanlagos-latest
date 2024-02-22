<div class="bg-white rounded-md mdc-card">
    <!-- Navigation Tabs -->
    <div class="form-tab-navs | mb-4 rounded-t-md"">
        <button class=" mdc-button vh-tab-btn sm:text-lg font-semibold text-light-500 active" data-tab="vh-tab1">Daily</button>
        <button class="mdc-button vh-tab-btn sm:text-lg font-semibold text-red-500" data-tab="vh-tab2">Hourly</button>
    </div>

    <div class="p-4">
        <!-- Tab Content -->
        <div id="vh-tab1" class="vh-tab-content">
            <!-- daily van hire form -->
            <?php include_once("daily-van-hire-form.php") ;?>
        </div>
        <div id="vh-tab2" class="hidden vh-tab-content">
            <!-- hourly van hire form -->
            <?php include_once("hourly-van-hire-form.php") ;?>
        </div>
    </div>
</div>