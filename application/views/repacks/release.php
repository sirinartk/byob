<?php slot::start('preamble') ?>
    <div class="restrictions">
        <h3><?=_('Distribution and generation restrictions')?></h3>
        <p><?=_('Mozilla\'s Build Your Own Browser (BYOB) application generates installer files for a lightly customized version of Firefox that can be publicly distributed. These customized versions of Firefox are licensed under the <a target="_new" href="http://www.mozilla.org/MPL/">Mozilla Public License</a> (MPL), and the installer files and their contents are subject to the restrictions outlined in the <a target="_new" href="http://www.mozilla.org/foundation/trademarks/policy.html" alt="Mozilla Trademark Policy">Mozilla Trademark Policy</a>. By using BYOB and/or distributing the installers generated by BYOB, you understand and agree to this.')?></p>

        <p><?=_('There are a few rules regarding distribution of the installers, and breaking any of the rules automatically revokes your (or your organization\'s) authorization to distribute them. The rules, which are further outlined in the Mozilla Public License and the Mozilla Trademark Policy are:')?></p>

        <ul>
            <li><?=_('The program installers generated by BYOB and/or their contents may not be modified in any way')?></li>
            <li><?=_('Any installer distributed must be signed with a digital certificate issued by Mozilla')?></li>
            <li><?=_('The installers must be distributed at no cost to the end-user')?></li>
            <li><?=_('The installers must be distributed as-is as a stand-alone file, and may not be incorporated with a meta-installer or pre-installed')?></li>
            <?php /*i18n: %1$s = Browser repack title */ ?>
            <li><?=sprintf(_('When referring to the product name, the installer must be referred to as %1$s to differentiate it from the default release of Firefox.'), html::specialchars($repack->title))?></li>
        </ul>

        <p><?=sprintf(_('If you have any questions regarding these conditions, or need clarification on any of the items mentioned here, please <a href="%1$s">contact us</a>.'), url::site('contact'))?></p>

    </div>
<?php slot::end() ?>
<?=View::factory('repacks/elements/confirm', array(
    'repack'     => $repack,
    'head_title' => _('release'),
    'crumbs'     => _('request release'),
    'message'    => _('Request a new release for this browser?'),
    'url'        => url::site(url::current()),
))->render()?>
