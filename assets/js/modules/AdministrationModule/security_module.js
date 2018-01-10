// security_module.js
define(['jquery', 'moment'], function($, moment) {
            var methods = {};



            methods.initialize_security_table = function($scope, $http) {
                $http.get('precision/administrations/security/load_security_table').then(function(response) {
                        console.log(response.data);
                        // var tables = $.fn.dataTable.tables();
                        // $(tables).each(function() {
                        //     $(this).DataTable().destroy();
                        // });
                        // console.log(response.data.result);
                        var table = $('#security_table').DataTable({
                                    "scrollY": '300',
                                    "scrollX": true,
                                    paging: false,
                                    info: false,
                                    autoWidth: true,
                                    data: response.data,
                                    dataType: 'jsonp',
                                    language: {
                                        emptyTable: "<h2>There are no Users in here, try adding some </h2>"
                                    },
                                    columns: [{
                                            data: "DHCSUserID",
                                        }, {
                                            data: "last_name",
                                        }, {
                                            data: "first_name"
                                        }, {
                                            data: "created_on",
                                            "render": function(data, type, row, meta) {                                            
                                                // console.log(data);
                                                return moment.unix(data).calendar();
                                            }
                                        },
                                            {
                                                data: "AccessLevel"
                                            },
                                            {
                                                data: "LastModified",
                                                 "render": function(data, type, row, meta) {                                            
                                                // console.log(data);
                                                return moment(data).calendar();
                                                    }
                                            },
                                            {
                                                data: "status"
                                            }
                                        ],
                                        "initComplete": function() {
                                            $(".dataTables_scrollFoot").insertAfter($('.dataTables_scrollHead'));
                                        }
                                    });



                                // Apply the search
                                table.columns().every(function() {
                                    var that = this;

                                    $('input', this.footer()).on('keyup change', function() {
                                        if (that.search() !== this.value) {
                                            that
                                                .search(this.value)
                                                .draw();
                                        }
                                    });
                                });





                            },
                            function error(response) {
                                console.log(response.statusText);
                            });

                    $('#security_table tfoot th').each(function() {
                        var title = $(this).text();
                        $(this).html('<input class="form-control input-sm" type="text" style="width: 100% !important;"/>');
                    });

                    // $(".dataTables_scrollFoot").insertAfter($('#tasksTable'));
                }

                return methods;

            });