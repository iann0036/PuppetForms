<h3>Modules</h3>
<form action="/modules/search/" class="search-line block" role="form">
    <span class="subtitle"><i class="icon-search3"></i> Search the Forge:</span>
    <div class="input-group">
        <div class="search-control">
            <input id="search" name="search" type="text" class="form-control autocomplete" placeholder="Enter a search term...">
        </div>
        <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Search</button>
        </span>
    </div>
    <br />
</form>
<h5>Installed Modules</h5>
    <?php
    foreach ($local_modules as $module) {
        echo '<h6><a href="/modules/detail/'.$module.'/">'.$module.'</a></h6>';
    }
    ?>
<br />