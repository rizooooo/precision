requirejs.config({
    baseUrl: "assets/js/",
    paths: {
        recaptcha: ["//www.google.com/recaptcha/api"], //Google Recaptcha
        jquery: ["libs/jquery.min"],
        bootstrapjs: ["libs/bootstrap.min"],
        datatables: 'libs/jquery.dataTables.min',
        bootstrapDatatable: 'libs/dataTables.bootstrap3.min',
        angular: ["libs/angular.min"],
       	validation: ["libs/jquery.validate.min"],
        moment: 'libs/moment',

        //Controllers
        RegistrationController: 'controllers/RegistrationController',
        /////Adjusments
        Dsh834Controller: 'controllers/Adjustments/Dsh834Controller',
        HcfaController: 'controllers/Adjustments/HcfaController',
        NonhcfaController: 'controllers/Adjustments/NonhcfaController',
        /////Administration
        BusinessrulesController: 'controllers/Administration/BusinessrulesController',
        MaintaincontractsController: 'controllers/Administration/MaintaincontractsController',
        MaintenanceController: 'controllers/Administration/MaintenanceController',
        SecurityController: 'controllers/Administration/SecurityController',
        /////Calstars
        FiletransferController: 'controllers/Calstars/FiletransferController',
        ReleaseController: 'controllers/Calstars/ReleaseController',
        /////Draw
        AppropriationsController: 'controllers/Draw/AppropriationsController',
        FederaldrawController: 'controllers/Draw/FederaldrawController',
        GrantsController: 'controllers/Draw/GrantsController',
        StatedrawController: 'controllers/Draw/StatedrawController',
        /////Etransactions
        CheckwriteController: 'controllers/Etransactions/CheckwriteController',
        CheckwritetransferletterController: 'controllers/Etransactions/CheckwritetransferletterController',
        DentaldetailController: 'controllers/Etransactions/DentaldetailController',
        MmcController: 'controllers/Etransactions/MmcController',
        MmisadminController: 'controllers/Etransactions/MmisadminController',
        SmartController: 'controllers/Etransactions/SmartController',
        UslController: 'controllers/Etransactions/UslController',
        /////Mtransactions
        CscorrectionsController: 'controllers/Mtransactions/CscorrectionsController',
        HandfiledController: 'controllers/Mtransactions/HandfiledController',
        HandfiledconlanController: 'controllers/Mtransactions/HandfiledconlanController',
        PlaceholderController: 'controllers/Mtransactions/PlaceholderController',
        ViewopencsController: 'controllers/Mtransactions/ViewopencsController',
        /////Receipts
        CashController: 'controllers/Receipts/CashController',
        WiretransController: 'controllers/Receipts/WiretransController',
        /////Reports
        AdhocController: 'controllers/Reports/AdhocController',
        FederalreportingCms21Controller: 'controllers/Reports/FederalreportingCms21Controller',
        FederalreportingCms37Controller: 'controllers/Reports/FederalreportingCms37Controller',
        FederalreportingCms64Controller: 'controllers/Reports/FederalreportingCms64Controller',
        FiscalforecastingController: 'controllers/Reports/FiscalforecastingController',
        StandardreportsController: 'controllers/Reports/StandardreportsController',
        //End of Controllers

        //Modules
        registration_module: 'modules/registration_module',
        /////AdjusmentsModule
        dsh834_module: 'modules/AdjustmentsModule/dsh834_module',
        hcfa_module: 'modules/AdjustmentsModule/hcfa_module',
        nonhcfa_module: 'modules/AdjustmentsModule/nonhcfa_module',
        /////AdministrationModule
        businessrules_module: 'modules/AdministrationModule/businessrules_module',
        maintaincontract_module: 'modules/AdministrationModule/maintaincontract_module',
        maintenance_module: 'modules/AdministrationModule/maintenance_module',
        security_module: 'modules/AdministrationModule/security_module',
        /////CalstarsModule
        filetransfer_module: 'modules/CalstarsModule/filetransfer_module',
        release_module: 'modules/CalstarsModule/release_module',
        /////DrawModule
        appropriations_module: 'modules/DrawModule/appropriations_module',
        federaldraw_module: 'modules/DrawModule/federaldraw_module',
        grants_module: 'modules/DrawModule/grants_module',
        statedraw_module: 'modules/DrawModule/statedraw_module',
        /////EtransactionsModule
        checkwrite_module: 'modules/EtransactionsModule/checkwrite_module',
        checkwritetransfer_module: 'modules/EtransactionsModule/checkwritetransfer_module',
        dentaldetail_module: 'modules/EtransactionsModule/dentaldetail_module',
        mmc_module: 'modules/EtransactionsModule/mmc_module',
        mmisadmin_module: 'modules/EtransactionsModule/mmisadmin_module',
        smart_module: 'modules/EtransactionsModule/smart_module',
        usl_module: 'modules/EtransactionsModule/usl_module',
        /////MtransactionsModule
        cscorrections_module: 'modules/MtransactionsModule/cscorrections_module',
        handfiled_module: 'modules/MtransactionsModule/handfiled_module',
        handfiledconlan_module: 'modules/MtransactionsModule/handfiledconlan_module',
        placeholder_module: 'modules/MtransactionsModule/placeholder_module',
        viewopencs_module: 'modules/MtransactionsModule/viewopencs_module',
        /////ReceiptsModule
        cash_module: 'modules/ReceiptsModule/cash_module',
        wiretrans_module: 'modules/ReceiptsModule/wiretrans_module',
        /////ReportsModule
        adhoc_module: 'modules/ReportsModule/adhoc_module',
        fedreportcms21_module: 'modules/ReportsModule/fedreportcms21_module',
        fedreportcms37_module: 'modules/ReportsModule/fedreportcms37_module',
        fedreportcms64_module: 'modules/ReportsModule/fedreportcms64_module',
        fiscalforecasting_module: 'modules/ReportsModule/fiscalforecasting_module',
        standardreports_module: 'modules/ReportsModule/standardreports_module',
        // End of Modules

        //Angular ng-modules
        //registration_app
        registration_app: 'ng-modules/app_registration',
        /////adjustments_app
        dsh834_app: 'ng-modules/adjustments_app/app_dsh834',
        hcfa_app: 'ng-modules/adjustments_app/app_hcfa',
        nonhcfa_app: 'ng-modules/adjustments_app/app_nonhcfa',
        /////administration_app
        businessrules_app: 'ng-modules/administration_app/app_businessrules',
        maintaincontracts_app: 'ng-modules/administration_app/app_maintaincontract',
        maintenance_app: 'ng-modules/administration_app/app_maintenance',
        security_app: 'ng-modules/administration_app/app_security',
        /////calstars_app
        filetransfer_app: 'ng-modules/calstars_app/app_filetransfer',
        release_app: 'ng-modules/calstars_app/app_release',
        /////draw_app
        appropriations_app: 'ng-modules/draw_app/app_appropriations',
        federaldraw_app: 'ng-modules/draw_app/app_federaldraw',
        grants_app: 'ng-modules/draw_app/app_grants',
        statedraw_app: 'ng-modules/draw_app/app_statedraw',
        /////etransaction_app
        checkwrite_app: 'ng-modules/etransaction_app/app_checkwrite',
        checkwritetransfer_app: 'ng-modules/etransaction_app/app_checkwritetransfer',
        dentaldetail_app: 'ng-modules/etransaction_app/app_dentaldetail',
        mmc_app: 'ng-modules/etransaction_app/app_mmc',
        mmisadmin_app: 'ng-modules/etransaction_app/app_mmisadmin',
        smart_app: 'ng-modules/etransaction_app/app_smart',
        usl_app: 'ng-modules/etransaction_app/app_usl',
        /////mtransaction_app
        cscorrection_app: 'ng-modules/mtransaction_app/app_cscorrection',
        handfiled_app: 'ng-modules/mtransaction_app/app_handfiled',
        handfiledconlan_app: 'ng-modules/mtransaction_app/app_handfiledconlan',
        placeholder_app: 'ng-modules/mtransaction_app/app_placeholder',
        viewopencs_app: 'ng-modules/mtransaction_app/app_viewopencs',
        /////receipts_app
        cash_app: 'ng-modules/receipts_app/app_cash',
        wiretrans_app: 'ng-modules/receipts_app/app_wiretrans',
        /////reports_app
        adhoc_app: 'ng-modules/reports_app/app_adhoc',
        fedreportcms21_app: 'ng-modules/reports_app/app_fedreportcms21',
        fedreportcms37_app: 'ng-modules/reports_app/app_fedreportcms37',
        fedreportcms64_app: 'ng-modules/reports_app/app_fedreportcms64',
        fiscalforecasting_app: 'ng-modules/reports_app/app_fiscalforecasting',
        standardreports_app: 'ng-modules/reports_app/app_standardreports',
        //End of Angular ng-modules

    },
    shim: {
        bootstrapjs: {
            deps: ["jquery"]
        },
        angular: {
            exports: "angular",
            deps: ["jquery"]
        },
        //Angular Dependencies
        //Registration
        registration_app: {
            deps: ['angular', 'RegistrationController']
        },
        //Adjustments
        dsh834_app: {
            deps: ['angular', 'Dsh834Controller']
        },
        hcfa_app: {
            deps: ['angular', 'HcfaController']
        },
        nonhcfa_app: {
            deps: ['angular', 'NonhcfaController']
        },
        //Administration
        businessrules_app: {
            deps: ['angular', 'BusinessrulesController']
        },
        maintaincontracts_app: {
            deps: ['angular', 'MaintaincontractsController']
        },
        maintenance_app: {
            deps: ['angular', 'MaintenanceController']
        },
        security_app: {
            deps: ['angular', 'SecurityController', 'bootstrapDatatable']
        },
        //Calstars
        filetransfer_app: {
            deps: ['angular', 'FiletransferController']
        },
        release_app: {
            deps: ['angular', 'ReleaseController']
        },
        //Draw
        appropriations_app: {
            deps: ['angular', 'AppropriationsController']
        },
        federaldraw_app: {
            deps: ['angular', 'FederaldrawController']
        },
        grants_app: {
            deps: ['angular', 'GrantsController']
        },
        statedraw_app: {
            deps: ['angular', 'StatedrawController']
        },
        //Etransaction
        checkwrite_app: {
            deps: ['angular', 'CheckwriteController']
        },
        checkwritetransfer_app: {
            deps: ['angular', 'CheckwritetransferletterController']
        },
        dentaldetail_app: {
            deps: ['angular', 'DentaldetailController']
        },
        mmc_app: {
            deps: ['angular', 'MmcController']
        },
        mmisadmin_app: {
            deps: ['angular', 'MmisadminController']
        },
        smart_app: {
            deps: ['angular', 'SmartController']
        },
        usl_app: {
            deps: ['angular', 'UslController']
        },
        //Mtransaction
        cscorrection_app: {
            deps: ['angular', 'CscorrectionsController']
        },
        handfiled_app: {
            deps: ['angular', 'HandfiledController']
        },
        handfiledconlan_app: {
            deps: ['angular', 'HandfiledconlanController']
        },
        placeholder_app: {
            deps: ['angular', 'PlaceholderController']
        },
        viewopencs_app: {
            deps: ['angular', 'ViewopencsController']
        },
        //Receipts
        cash_app: {
            deps: ['angular', 'CashController']
        },
        wiretrans_app: {
            deps: ['angular', 'WiretransController']
        },
        //Reports
        adhoc_app: {
            deps: ['angular', 'AdhocController']
        },
        fedreportcms21_app: {
            deps: ['angular', 'FederalreportingCms21Controller']
        },
        fedreportcms37_app: {
            deps: ['angular', 'FederalreportingCms37Controller']
        },
        fedreportcms64_app: {
            deps: ['angular', 'FederalreportingCms64Controller']
        },
        fiscalforecasting_app: {
            deps: ['angular', 'FiscalforecastingController']
        },
        standardreports_app: {
            deps: ['angular', 'StandardreportsController']
        },
        //Controller
        //Registration
        RegistrationController: {
            deps: ['angular', 'validation']
        },
        //Adjustments
        Dsh834Controller: {
            deps: ['angular']
        },
        HcfaController: {
            deps: ['angular']
        },
        NonhcfaController: {
            deps: ['angular']
        },
        //Administration
        BusinessrulesController: {
            deps: ['angular']
        },
        MaintaincontractsController: {
            deps: ['angular']
        },
        MaintenanceController: {
            deps: ['angular']
        },
        SecurityController: {
            deps: ['angular']
        },
        //Calstars
        FiletransferController: {
            deps: ['angular']
        },
        ReleaseController: {
            deps: ['angular']
        },
        //Draw
        AppropriationsController: {
            deps: ['angular']
        },
        FederaldrawController: {
            deps: ['angular']
        },
        GrantsController: {
            deps: ['angular']
        },
        StatedrawController: {
            deps: ['angular']
        },
        //Etransactions
        CheckwriteController: {
            deps: ['angular']
        },
        CheckwritetransferletterController: {
            deps: ['angular']
        },
        DentaldetailController: {
            deps: ['angular']
        },
        MmcController: {
            deps: ['angular']
        },
        MmisadminController: {
            deps: ['angular']
        },
        SmartController: {
            deps: ['angular']
        },
        UslController: {
            deps: ['angular']
        },
        //Mtransaction
        CscorrectionsController: {
            deps: ['angular']
        },
        HandfiledController: {
            deps: ['angular']
        },
        HandfiledconlanController: {
            deps: ['angular']
        },
        PlaceholderController: {
            deps: ['angular']
        },
        ViewopencsController: {
            deps: ['angular']
        },
        //Receipts
        CashController: {
            deps: ['angular']
        },
        WiretransController: {
            deps: ['angular']
        },
        //Reports
        AdhocController: {
            deps: ['angular']
        },
        FederalreportingCms21Controller: {
            deps: ['angular']
        },
        FederalreportingCms37Controller: {
            deps: ['angular']
        },
        FederalreportingCms64Controller: {
            deps: ['angular']
        },
        FiscalforecastingController: {
            deps: ['angular']
        },
        StandardreportsController: {
            deps: ['angular']
        },
        //Modules
        registration_module: {
        	deps: ['validation']
        }
    },
    map: {
        '*': {
            'datatables.net': 'datatables',
        }
    }
});
var path = window.location.pathname;
require.config({
    baseUrl: "http://localhost/precision/assets/js/"
});
if (path.toLowerCase() == "/precision/" || (path.toLowerCase()).indexOf('login') != -1 || (path.toLowerCase()).indexOf('login/') != -1) {
    require(['config', 'jquery', 'recaptcha'], function() {
        //require(['signinCtrl']);
        $('body').css('background-image', 'url(../precision/assets/images/bg_accounting.jpeg)');
        //$(".se-pre-con").fadeOut("slow");
    });
} else if ((path.toLowerCase()).indexOf('registration') != -1 || (path.toLowerCase()).indexOf('registration/') != -1) {
    require(['config', 'jquery', 'recaptcha', 'registration_app'], function() {
        $('body').css('background-image', 'url(../precision/assets/images/bg_accounting.jpeg)');
        angular.bootstrap(document, ['app']);
    });
}
//Adjustments
else if (path.toLowerCase() == "/precision/adjustments/dsh834cwa" || path.toLowerCase() == "/precision/adjustments/dsh834cwa/") {
    require(['config', 'jquery', 'dsh834_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/adjustments/hcfa" || path.toLowerCase() == "/precision/adjustments/hcfa/") {
    require(['config', 'jquery', 'hcfa_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/adjustments/nonhcfa" || path.toLowerCase() == "/precision/adjustments/nonhcfa/") {
    require(['config', 'jquery', 'nonhcfa_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Administration
else if (path.toLowerCase() == "/precision/administrations/businessrules" || path.toLowerCase() == "/precision/administrations/businessrules/") {
    require(['config', 'jquery', 'businessrules_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/administrations/maintaincontracts" || path.toLowerCase() == "/precision/administrations/maintaincontracts/") {
    require(['config', 'jquery', 'maintaincontracts_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/administrations/maintenance" || path.toLowerCase() == "/precision/administrations/maintenance/") {
    require(['config', 'jquery', 'maintenance_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/administrations/security" || path.toLowerCase() == "/precision/administrations/security/") {
    require(['config', 'jquery', 'security_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Calstars
else if (path.toLowerCase() == "/precision/calstars/filetransfer" || path.toLowerCase() == "/precision/calstars/filetransfer/") {
    require(['config', 'jquery', 'filetransfer_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/calstars/releasera" || path.toLowerCase() == "/precision/calstars/releasera/") {
    require(['config', 'jquery', 'release_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Draw
else if (path.toLowerCase() == "/precision/draws/appropriations" || path.toLowerCase() == "/precision/draws/appropriations/") {
    require(['config', 'jquery', 'appropriations_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/draws/grants" || path.toLowerCase() == "/precision/draws/grants/") {
    require(['config', 'jquery', 'grants_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/draws/federaldraw" || path.toLowerCase() == "/precision/draws/federaldraw/") {
    require(['config', 'jquery', 'federaldraw_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/draws/statedraw" || path.toLowerCase() == "/precision/draws/statedraw/") {
    require(['config', 'jquery', 'statedraw_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Etransactions
else if (path.toLowerCase() == "/precision/etransactions/checkwrite" || path.toLowerCase() == "/precision/etransactions/checkwrite/") {
    require(['config', 'jquery', 'checkwrite_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/checkwritetransferletter" || path.toLowerCase() == "/precision/etransactions/checkwritetransferletter/") {
    require(['config', 'jquery', 'checkwritetransfer_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/dentaldetail" || path.toLowerCase() == "/precision/etransactions/dentaldetail/") {
    require(['config', 'jquery', 'dentaldetail_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/mmc" || path.toLowerCase() == "/precision/etransactions/mmc/") {
    require(['config', 'jquery', 'mmc_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/mmisadmin" || path.toLowerCase() == "/precision/etransactions/mmisadmin/") {
    require(['config', 'jquery', 'mmisadmin_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/smart" || path.toLowerCase() == "/precision/etransactions/smart/") {
    require(['config', 'jquery', 'smart_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/etransactions/usl" || path.toLowerCase() == "/precision/etransactions/usl/") {
    require(['config', 'jquery', 'usl_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Mtransaction
else if (path.toLowerCase() == "/precision/mtransactions/cscorrections" || path.toLowerCase() == "/precision/mtransactions/cscorrections/") {
    require(['config', 'jquery', 'cscorrection_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/mtransactions/handfiled" || path.toLowerCase() == "/precision/mtransactions/handfiled/") {
    require(['config', 'jquery', 'handfiled_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/mtransactions/handfiledconlan" || path.toLowerCase() == "/precision/mtransactions/handfiledconlan/") {
    require(['config', 'jquery', 'handfiledconlan_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/mtransactions/placeholder" || path.toLowerCase() == "/precision/mtransactions/placeholder/") {
    require(['config', 'jquery', 'placeholder_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/mtransactions/viewopencs" || path.toLowerCase() == "/precision/mtransactions/viewopencs/") {
    require(['config', 'jquery', 'viewopencs_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Receipts
else if (path.toLowerCase() == "/precision/receipts/cash" || path.toLowerCase() == "/precision/receipts/cash/") {
    require(['config', 'jquery', 'cash_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/receipts/wiretranseft" || path.toLowerCase() == "/precision/receipts/wiretranseft/") {
    require(['config', 'jquery', 'wiretrans_app'], function() {
        angular.bootstrap(document, ['app']);
    });
}
//Reports
else if (path.toLowerCase() == "/precision/reports/adhoc" || path.toLowerCase() == "/precision/reports/adhoc/") {
    require(['config', 'jquery', 'adhoc_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/reports/federalreportingcms21" || path.toLowerCase() == "/precision/reports/federalreportingcms21/") {
    require(['config', 'jquery', 'fedreportcms21_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/reports/federalreportingcms37" || path.toLowerCase() == "/precision/reports/federalreportingcms37/") {
    require(['config', 'jquery', 'fedreportcms37_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/reports/federalreportingcms64" || path.toLowerCase() == "/precision/reports/federalreportingcms64/") {
    require(['config', 'jquery', 'fedreportcms64_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/reports/fiscalforecasting" || path.toLowerCase() == "/precision/reports/fiscalforecasting/") {
    require(['config', 'jquery', 'fiscalforecasting_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else if (path.toLowerCase() == "/precision/reports/standardreports" || path.toLowerCase() == "/precision/reports/standardreports/") {
    require(['config', 'jquery', 'standardreports_app'], function() {
        angular.bootstrap(document, ['app']);
    });
} else {
    console.log(path.toLowerCase());
    console.log("other path");
}