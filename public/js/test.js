
//province dropdown 

$(document).ready(function() {
    $('#region-dropdown').on('change', function() {
        var regionCode = $('#region-dropdown option:selected').data('code');
        var regionName = $('#region-dropdown option:selected').text();
        $.ajax({
            url: 'https://psgc.cloud/api/regions/' + regionName + '/provinces',
            type: 'GET',
            success: function(response) {
                $('#province-dropdown').empty();
                $.each(response, function(key, province) {
                    $('#province-dropdown').append('<option value="' + province.name + '" data-name="' + province.code + '">' + province.name + '</option>');
                });
            }
        });
    });
});

// cities

$(document).ready(function() {
    $('#region-dropdown').on('change', function() {
        var regionCode = $(this).val();
        $.ajax({
            url: 'https://psgc.cloud/api/regions/' + regionCode + '/cities',
            type: 'GET',
            success: function(response) {
                $('#cities-dropdown').empty();
                $.each(response, function(key, cities) {
                    $('#cities-dropdown').append('<option value="' + cities.name + '>' + cities.name + '</option>');
                });
            }
        });
    });
});

// municipalities
//https://psgc.cloud/api/provinces/0102900000/municipalities

$(document).ready(function() {
    $('#province-dropdown').on('change', function() {
        var provinceCode = $('#province-dropdown option:selected').data('code');
        var provinceName = $('#province-dropdown option:selected').text();
        $.ajax({
            url: 'https://psgc.cloud/api/provinces/' + provinceName + '/municipalities',
            type: 'GET',
            success: function(response) {
                $('#municipality-dropdown').empty(); 
                $.each(response, function(key, municipality) {
                    $('#municipality-dropdown').append('<option value="' + municipality.name + '" data-name="' + municipality.code + '">' + municipality.name + '</option>');
                });
            }
        });
    });
});

// baranggay
// https://psgc.cloud/api/municipalities/0102802000/barangays

$(document).ready(function() {
    $('#municipality-dropdown').on('change', function() {
        var municipalityCode = $('#municipality-dropdown option:selected').data('code');
        var municipalityName = $('#municipality-dropdown option:selected').text();

        $.ajax({
            url: 'https://psgc.cloud/api/municipalities/' + municipalityName + '/barangays',
            type: 'GET',
            success: function(response) {
                $('#Barangay-dropdown').empty(); 
                $.each(response, function(key, barangay) {
                    $('#Barangay-dropdown').append('<option value="' + barangay.name + '">' + barangay.name + '</option>');
                });
            }
        });
    });
});
