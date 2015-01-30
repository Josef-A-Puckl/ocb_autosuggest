[{$smarty.block.parent}]
<script type="text/javascript">
    var source = '[{$oViewConf->getModuleUrl('ocb_autosuggestion','controllers/ocb_autosuggest.php')}]';
</script>
[{assign var="oConf" value=$oViewConf->getConfig()}]
[{if !$oConf->getConfigParam('ocb_autosuggest_css')}]
    [{oxstyle include=$oViewConf->getModuleUrl('ocb_autosuggestion','out/src/css/ocb_autosuggest.css')}]
[{/if}]
[{oxscript include=$oViewConf->getModuleUrl('ocb_autosuggestion','out/src/js/ocb_autosuggest.js')}]