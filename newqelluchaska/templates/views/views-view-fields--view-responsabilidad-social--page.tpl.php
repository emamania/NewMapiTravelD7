<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 *   - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
 # 	print print_r(array_keys($fields), 1);
  	global $base_root;
  	global $node_url;
    $title                  = $fields['title']->content;
    $body                   = $fields['body']->content;
    $field_image            = $fields['field_agregue_imagen']->content;
    $path                   = $base_root . $fields['path']->content;
		
	/*$noimg = '<img src="/sites/default/files/noticia.jpg" alt="Cusco Noticias" width="140" height="105" />';*/
?>
<style>
    .artiRespoSocial {        
        margin-bottom: 15px;
        display: flex;
        box-shadow: var(--box-shadow3);
        border-radius: 5px;
    }
    
    .artiRespoSocial a {
        display: block;
    }
    .artiRespoSocial a img {
        display: block;
        height: 100%;
        width: 100%;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
        min-width: 220px;
        max-width: 220px;
        object-fit: cover;
    }
    .artiRespoSocial .artiRespoSocial-content {
        background: #fff;
        padding: 1rem;
    }
    .artiRespoSocial h2{
        margin: 0;
        margin-bottom: .5rem;
        font-size: 1.1rem;
        color: var(--primary-color);
    }
    .artiRespoSocial .pie{
        display: flex;
        justify-content: space-between;
    }
    .artiRespoSocial .pie .btn{
        background: #719136;
        color: var(--light);
        padding: .3rem 1rem;
        font-size: .9rem;
        height: 28px;
    }
    .artiRespoSocial .pie .social ul {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px;
    }
    .artiRespoSocial .pie .social ul li {
        list-style: none;
    }
    .artiRespoSocial .pie .social ul li:first-child{
        margin-right: 1rem;
    }
    @media screen and (max-width: 786px) {
        .artiRespoSocial {        
            margin-bottom: 15px;
            display: block;
            box-shadow: var(--box-shadow3);
            border-radius: 5px;
        }
        .artiRespoSocial a img {
            width: 100%!important;
            display:block;
            max-width: 100%;
            height: 200px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 0;
        }        
    }
</style>

<article class="artiRespoSocial">
    <a href="<?php print $path ?>" rel="nofollow">
        <?php print $field_image; ?>
    </a>
    <div class="artiRespoSocial-content">
        <a href="<?php print $path; ?>"><h2><?php print $title; ?></h2></a>
        <div class="artiRespoSocial-body"><?php print $body; ?></div>
        <div class="pie">
            <a href="<?php print $path ?> " rel="nofollow" class="btn">ver mas</a>
            <div class="social">
                <ul>
                    <li class="social">
                        <fb:like href="<php print $path; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
                    </li>
                    <li class="social">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<php print $path; ?>" data-count="horizontal" data-via="MapiTravel4all" data-lang="es">Tweet</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  <!-- <div class="articulosleido-social">
    <ul>
      <li class="social">
        <fb:like href="<php print $path; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
      </li>
      <li class="social"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<php print $path; ?>" data-count="horizontal" data-via="MapiTravel4all" data-lang="es">Tweet</a></li>
    </ul>
  </div> -->
</article>
<!-- <div class="clear"></div> -->
