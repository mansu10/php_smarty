
{#include file="global/header.tpl"#}

{#if $direct == 'personnel' #}

{#include file="admin/personnel_con.tpl"#}

{#elseif $direct == 'user'#}

{#else#}

{#include file="admin/personnel_con.tpl"#}

{#/if#}

{#include file="global/footer.tpl"#}