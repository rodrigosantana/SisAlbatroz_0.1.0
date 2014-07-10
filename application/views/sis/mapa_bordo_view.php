<div class="row">
    
    <div id="dashboard-main" class="span12">
        <form id="create_note" class="form-horizontal" method="post" action="<?=site_url('api/create_note')?>">
            <div class="input-append">
                <input tabindex="1" type="text" name="title" placeholder="Note Title" />
                <input tabindex="3" type="submit" class="btn btn-success" value="Create" />
            </div>
        </form>
        
        <div id="list_note">
            <span class="ajax-loader-gray"></span>
        </div>
    </div>
    
    
</div>