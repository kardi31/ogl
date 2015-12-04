{include file="$templa/subheader.tpl"}
{include file="$templa/top.tpl"}
{include file="$templa/left.tpl"}



<div class="left">


    <h1 class="ng">{$lang[415]}</h1>

    <p>

    <center>
        <table >
            <tr>
                {$k=0}
                {section name=id loop=$u_id}

                    <td class="profil-m">
                        <a href="profil/{$u_loginn[id]}/{$u_id[id]}/" style="text-decoration:none;" onmouseover="return overlib('{$lang[12]} {$u_wiek[id]}<br/>{$lang[13]} {$u_miasto[id]}<br/>{$lang[14]} {$u_woj[id]}<br/>{$lang[15]} {$u_plec[id]}', CAPTION, '<b><center>{$u_login[id]}</center>');" onmouseout="return nd();">{if $u_img[id]==""}{if $u_plecnr[id]=="1"}<img src="{$site_url}images/women.jpg" alt="{$u_login[id]}" />{else}<img src="{$site_url}images/men.jpg" alt="{$u_login[id]}" />{/if}{else}<img src="{$site_url}upload/zdjecia/{$u_img[id]}" alt="{$u_login[id]}" />{/if}<br/><center>{if $u_online[id]>=1}<img src="images/online.jpg" title="{$lang[16]}" alt="Online" key="On">{else}<img src="images/ofline.jpg" title="{$lang[17]}" alt="Offline" key="Off">{/if}<b>{$u_login[id]}</b>{if $u_vip[id]>=$gtime}{$lang[700]}{/if}</center></a></td>
                    {if $k%5==4}</tr>{/if}
{if $k%5==4&&$k!=14}<tr>{/if}
{$k++}
            {/section}
{if $k%5!=4}</tr>{/if}
        </table>
    </center>

    {if $podstron>1}<br><br>
        <center>
            <table border="0">
                <tr>
                    <td style="width:20px;height:20px;" class="td_hover" align="center">{if $strona>1}<a href="kobiety/s-1" title="{$lang[654]}"><<</a>{else}<<{/if}</td>
                    <td style="width:20px;height:20px;" class="td_hover" align="center">{if $page_m>=1}<a href="kobiety/s-{$page_m}" title="{$lang[656]}: {$page_m}"><</a>{else}<{/if}</td>
                    {section name=strona start=$page_start loop=$page_end step=1}

                        <td style="width:20px;height:20px;" class="td_hover" align="center"><a href="kobiety/s-{$smarty.section.strona.index+1}">{if $strona==$smarty.section.strona.index+1}<b>{$smarty.section.strona.index+1}</b>{else}{$smarty.section.strona.index+1}{/if}</a></td>

                    {/section}

                    <td style="width:20px;height:20px;" class="td_hover" align="center">{if $page_p<=$podstron}<a href="kobiety/s-{$page_p}"  title="{$lang[656]}: {$page_p}">></a>{else}>{/if}</td>
                    <td style="width:20px;height:20px;" class="td_hover" align="center">{if $strona!=$podstron}<a href="kobiety/s-{$podstron}" title="{$lang[655]}({$podstron})">>></a>{else}>>{/if}</td>
                </tr>
            </table>
        </center>
    {/if}


</p>


</div>


{include file="$templa/right.tpl"}
{include file="$templa/footer.tpl"}