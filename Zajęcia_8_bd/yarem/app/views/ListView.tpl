{extends file="main.tpl"}

{block name=footer}Informacja dodatkowa{/block}

{block name=content}



    <table id="tab_people" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>kwota</th>
            <th>termin</th>
            <th>oprocentowanie</th>
            <th>wynik</th>
        </tr>
        </thead>
        <tbody>
        {foreach $list as $p}
            {strip}
                <tr>
                    <td>{$p["kwota"]}</td>
                    <td>{$p["termin"]}</td>
                    <td>{$p["oprocentowanie"]}</td>
                    <td>{$p["wynik"]}</td>

                </tr>
            {/strip}
        {/foreach}
        <a href="{$conf->action_root}calcShow" class="btn btn-primary mt-2 mb-2 ">Wróć</a>

        </tbody>
    </table>

{/block}