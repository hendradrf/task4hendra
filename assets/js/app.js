var getHospitals = [
    { //aceh
        "hospitals": [
            { "name": 'RSU Dr. Zainoel Abidin Banda Aceh', 'address': 'Jl. Tgk. Daud Beureueh No.108 banda Aceh Telp: 0651 - 22077, 28148'},
            { "name": 'RSU Cut Meutia Lhokseumawe', 'address': 'Jl. Banda Aceh-Medan Km.6 Buket Rata Lhokseumawe Telp: 0645-43012'},
        ]
    },
    { //sumut
        "hospitals": [
            { "name": 'RSU H. Adam Malik Medan', 'address': 'Jl. Bunga lau No.17 Telp: 061 - 8360381 ; Fax: 061 - 8360255'},
            { "name": 'RSU Kabanjahe', 'address': 'Jl. KS Ketaren 8 Kabanjahe Telp: 20550'},
            { "name": 'RSU Pematang Siantar', 'address': 'Jl. Sutomo No.230 P. Siantar Telp: 0634-21780'},
            { "name": 'RSU Padang Sidempuan', 'address': 'Jl. Dr FL Tobing Pd Sidempuan Telp: 21780'},
        ]
    },
    { //sumbar
        "hospitals": [
            { "name": 'RSU H. Adam Malik Medan', 'address': 'Jl. Bunga lau No.17 Telp: 061 - 8360381 ; Fax: 061 - 8360255'},
            { "name": 'RSU Kabanjahe', 'address': 'Jl. KS Ketaren 8 Kabanjahe Telp: 20550'},
            { "name": 'RSU Pematang Siantar', 'address': 'Jl. Sutomo No.230 P. Siantar Telp: 0634-21780'},
            { "name": 'RSU Padang Sidempuan', 'address': 'Jl. Dr FL Tobing Pd Sidempuan Telp: 21780'},
        ]
    },
];

$(function(){
    $('[data-toggle=scroll]').on('click',function(){
        var offset = $(this).data('offset') || 0;
        var href = $(this).attr('href');
        var target = $(href).offset().top - offset;
        $('html,body').animate({
            scrollTop:target
        },500)
    });
    
});

$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".dropdown-menu li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});