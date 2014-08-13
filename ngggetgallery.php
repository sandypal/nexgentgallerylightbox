function nggGetGallery( $galleryID, $template = '', $images = false ) {
    
    global $nggRewrite;

    $ngg_options = nggGallery::get_option('ngg_options');
    
    //Set sort order value, if not used (upgrade issue)
    $ngg_options['galSort'] = ($ngg_options['galSort']) ? $ngg_options['galSort'] : 'pid';
    $ngg_options['galSortDir'] = ($ngg_options['galSortDir'] == 'DESC') ? 'DESC' : 'ASC';
    
    // get gallery values
    //TODO: Use pagination limits here to reduce memory needs
    $picturelist = nggdb::get_gallery($galleryID, $ngg_options['galSort'], $ngg_options['galSortDir']);
    return $picturelist;
}