// Nova java skript funkcija
$(document).ready(function () {
    $('#button').click(function () {
        $(':input', '#mass').not(':button, :submit, :reset, :hidden').val('');
    });
});
$(document).ready(function () {
    $('.resetButton').click(function () {
        $(':input', '#preasure').not(':button, :submit, :reset, :hidden').val('');
        $(':input', '#dimension').not(':button, :submit, :reset, :hidden').val('');
        $(':input', '#distance').not(':button, :submit, :reset, :hidden').val('');
    });
});
$(document).ready(function () {
    //dohvatio sam sva polja tipa number i hvatam ivent Change
    $("#mass input[type=text]").focus(function () {
        var input = $(this) ;
        $("#mass input").not(':button, :submit, :reset, :hidden').each(function () {
                //this se odnosi na funckiju u kojoj se nalazim
                //ako je vrdnost setovana na jednom ostalim daj prazno
                // i readonli atribut
                var input = $(this);
                input.val(null);

        });
        //alert(input.val());
    });
});
$(document).ready(function () {
    //dohvatio sam sva polja tipa number i hvatam ivent Change
    $("#distance input[type=text]").focus(function () {
        var input = $(this);
        $("#distance input").not(':button, :submit, :reset, :hidden').each(function () {
                //this se odnosi na funckiju u kojoj se nalazim
                //ako je vrdnost setovana na jednom ostalim daj prazno
                // i readonli atribut
                var input = $(this);
                input.val(null);
        });
    });
});
$(document).ready(function () {
    //dohvatio sam sva polja tipa number i hvatam ivent Change
    $("#dimension input[type=text]").focus(function () {
        var input = $(this);
        $("#dimension input").not(':button, :submit, :reset, :hidden').each(function () {
                //this se odnosi na funckiju u kojoj se nalazim
                //ako je vrdnost setovana na jednom ostalim daj prazno
                // i readonli atribut
                var input = $(this);
                input.val(null);
        });
    });
});
$(document).ready(function () {
    //dohvatio sam sva polja tipa number i hvatam ivent Change
    $("#preasure input[type=text]").focus(function () {
        $("#preasure input").not(':button, :submit, :reset, :hidden').each(function () {
                //this se odnosi na funckiju u kojoj se nalazim
                //ako je vrdnost setovana na jednom ostalim daj prazno
                // i readonli atribut
                //console.log($(this));
                 var input = $(this);
                input.val(null);
        });
    });
});