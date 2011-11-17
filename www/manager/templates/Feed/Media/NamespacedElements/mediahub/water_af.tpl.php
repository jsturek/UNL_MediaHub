<label for="water_flow_type" class="element">Water flow type:</label>
<div class="element">
   <a href='#' id='show_maf'>Standing</a> or <a href='#' id='show_cfs'>Flowing?</a>
</div>
<ol>
    <li id='water_cfs_form'>
        <label for="water_cfs" class="element">Water: CFS</label>
        <div class="element">
            <input name="UNL_MediaHub_Feed_Media_NamespacedElements_mediahub[0][element]" type="hidden" value="water_cfs"/>
            <input id="water_cfs" name="UNL_MediaHub_Feed_Media_NamespacedElements_mediahub[0][value]" type="text" value="<?php echo getFieldValue($context, 'mediahub', 'water_cfs'); ?>"/>
        </div>
    </li>
    <li id='water_maf_form'>
        <label for="water_maf" class="element">Water: MAF</label>
        <div class="element">
            <input name="UNL_MediaHub_Feed_Media_NamespacedElements_mediahub[1][element]" type="hidden" value="water_maf"/>
            <input id="water_maf" name="UNL_MediaHub_Feed_Media_NamespacedElements_mediahub[1][value]" type="text" value="<?php echo getFieldValue($context, 'mediahub', 'water_maf'); ?>"/>
        </div>
    </li>
</ol>