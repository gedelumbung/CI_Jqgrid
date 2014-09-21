<!DOCTYPE HTML>
<html>
    <head>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/dark-hive/jquery-ui.css" type="text/css" rel="stylesheet"/>
        <link href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" rel="stylesheet"/>
        <link type="text/css" href="<?php echo base_url()?>asset/jqgrid/css/ui.jqgrid.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url()?>asset/jqgrid/css/jquery.searchFilter.css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>asset/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script> 
        <script src="<?php echo base_url(); ?>asset/jqgrid/js/jquery.jqGrid.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>asset/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
 
        <title>Menampilkan Data Grid Dengan jQgrid Di CodeIgniter</title>
    </head>

    <body> 
        <script type="text/javascript">
            jQuery().ready(function (){
                jQuery("#daftardosen").jqGrid({
                    url:'<?php echo base_url().'index.php/jqgrid/tampil_data'?>',
                    mtype : "post",
                    datatype: "json",
                    colNames:['Nomor','Kode Dosen','NIDN','Nama Dosen'], 
                    colModel:[
                        {name:'nomor',index:'nomor', width:10, align:"center"},
                        {name:'kode_dosen',index:'kode_dosen', width:15, align:"center"},
                        {name:'nidn',index:'nidn', width:10, align:"center"},
                        {name:'nama_dosen',index:'nama_dosen', width:40, align:"center"},
                    ],
                    rowNum:10,
                    width: 800,
                    height: 200,
                    rowList:[10,20,30,40,50,60,70],
                    pager: '#pager1',
                    sortname: 'kode_dosen',
                    viewrecords: true,
                    caption:"Daftar Nama-Nama Dosen di Kampus Ane"
                }).navGrid('#pager1',{edit:true,add:true,del:true});
            });
        </script>
 
        <table id="daftardosen"></table>
        <div id="pager1"></div>
    </body>

