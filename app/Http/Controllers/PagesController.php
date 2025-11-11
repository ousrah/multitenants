<?php

namespace App\Http\Controllers;
use App\Models\Cycle;
use App\Models\Tenant;

class PagesController extends Controller
{
     public function tenants()
    {
        $tenants = Tenant::all();
        return view('dashboardtenants', compact('tenants'));
    }

   
    public function index()
    {
        $cycles = Cycle::all();
        return view('dashboard', compact('cycles'));
    }

    public function elementsAvatar()
    {
        return view('pages/elements-avatar');
    }

    public function elementsAlert()
    {
        return view('pages/elements-alert');
    }

    public function elementsBadge()
    {
        return view('pages/elements-badge');
    }

    public function elementsBreadcrumb()
    {
        return view('pages/elements-breadcrumb');
    }

    public function elementsButton()
    {
        return view('pages/elements-button');
    }

    public function elementsButtonGroup()
    {
        return view('pages/elements-button-group');
    }

    public function elementsCard()
    {
        return view('pages/elements-card');
    }

    public function elementsDivider()
    {
        return view('pages/elements-divider');
    }

    public function elementsMask()
    {
        return view('pages/elements-mask');
    }

    public function elementsProgress()
    {
        return view('pages/elements-progress');
    }

    public function elementsSkeleton()
    {
        return view('pages/elements-skeleton');
    }

    public function elementsSpinner()
    {
        return view('pages/elements-spinner');
    }

    public function elementsTag()
    {
        return view('pages/elements-tag');
    }

    public function elementsTooltip()
    {
        return view('pages/elements-tooltip');
    }

    public function elementsTypography()
    {
        return view('pages/elements-typography');
    }

    public function componentsAccordion()
    {
        return view('pages/components-accordion');
    }

    public function componentsCollapse()
    {
        return view('pages/components-collapse');
    }

    public function componentsTab()
    {
        return view('pages/components-tab');
    }

    public function componentsDropdown()
    {
        return view('pages/components-dropdown');
    }

    public function componentsPopover()
    {
        return view('pages/components-popover');
    }

    public function componentsModal()
    {
        return view('pages/components-modal');
    }

    public function componentsDrawer()
    {
        return view('pages/components-drawer');
    }

    public function componentsSteps()
    {
        return view('pages/components-steps');
    }

    public function componentsTimeline()
    {
        return view('pages/components-timeline');
    }

    public function componentsPagination()
    {
        return view('pages/components-pagination');
    }

    public function componentsMenuList()
    {
        return view('pages/components-menu-list');
    }

    public function componentsTreeview()
    {
        return view('pages/components-treeview');
    }

    public function componentsTable()
    {
        return view('pages/components-table');
    }

    public function componentsTableAdvanced()
    {
        return view('pages/components-table-advanced');
    }

    public function componentsTableGridjs()
    {
        return view('pages/components-table-gridjs');
    }

    public function componentsApexchart()
    {
        return view('pages/components-apexchart');
    }

    public function componentsCarousel()
    {
        return view('pages/components-carousel');
    }

    public function componentsNotification()
    {
        return view('pages/components-notification');
    }

    public function componentsExtensionClipboard()
    {
        return view('pages/components-extension-clipboard');
    }

    public function componentsExtensionPersist()
    {
        return view('pages/components-extension-persist');
    }

    public function componentsExtensionMonochrome()
    {
        return view('pages/components-extension-monochrome');
    }

    public function formsLayoutV1()
    {
        return view('pages/forms-layout-v1');
    }

    public function formsLayoutV2()
    {
        return view('pages/forms-layout-v2');
    }

    public function formsLayoutV3()
    {
        return view('pages/forms-layout-v3');
    }

    public function formsLayoutV4()
    {
        return view('pages/forms-layout-v4');
    }

    public function formsLayoutV5()
    {
        return view('pages/forms-layout-v5');
    }

    public function formsInputText()
    {
        return view('pages/forms-input-text');
    }

    public function formsInputGroup()
    {
        return view('pages/forms-input-group');
    }

    public function formsInputMask()
    {
        return view('pages/forms-input-mask');
    }

    public function formsCheckbox()
    {
        return view('pages/forms-checkbox');
    }

    public function formsRadio()
    {
        return view('pages/forms-radio');
    }

    public function formsSwitch()
    {
        return view('pages/forms-switch');
    }

    public function formsSelect()
    {
        return view('pages/forms-select');
    }

    public function formsTomSelect()
    {
        return view('pages/forms-tom-select');
    }

    public function formsTextarea()
    {
        return view('pages/forms-textarea');
    }

    public function formsRange()
    {
        return view('pages/forms-range');
    }

    public function formsDatepicker()
    {
        return view('pages/forms-datepicker');
    }

    public function formsTimepicker()
    {
        return view('pages/forms-timepicker');
    }

    public function formsDatetimepicker()
    {
        return view('pages/forms-datetimepicker');
    }

    public function formsTextEditor()
    {
        return view('pages/forms-text-editor');
    }

    public function formsUpload()
    {
        return view('pages/forms-upload');
    }

    public function formsValidation()
    {
        return view('pages/forms-validation');
    }

    public function layoutsOnboarding1()
    {
        return view('pages/layouts-onboarding-1');
    }

    public function layoutsOnboarding2()
    {
        return view('pages/layouts-onboarding-2');
    }

    public function layoutsUserCard1()
    {
        return view('pages/layouts-user-card-1');
    }

    public function layoutsUserCard2()
    {
        return view('pages/layouts-user-card-2');
    }

    public function layoutsUserCard3()
    {
        return view('pages/layouts-user-card-3');
    }

    public function layoutsUserCard4()
    {
        return view('pages/layouts-user-card-4');
    }

    public function layoutsUserCard5()
    {
        return view('pages/layouts-user-card-5');
    }

    public function layoutsUserCard6()
    {
        return view('pages/layouts-user-card-6');
    }

    public function layoutsUserCard7()
    {
        return view('pages/layouts-user-card-7');
    }

    public function layoutsBlogCard1()
    {
        return view('pages/layouts-blog-card-1');
    }

    public function layoutsBlogCard2()
    {
        return view('pages/layouts-blog-card-2');
    }

    public function layoutsBlogCard3()
    {
        return view('pages/layouts-blog-card-3');
    }

    public function layoutsBlogCard4()
    {
        return view('pages/layouts-blog-card-4');
    }

    public function layoutsBlogCard5()
    {
        return view('pages/layouts-blog-card-5');
    }

    public function layoutsBlogCard6()
    {
        return view('pages/layouts-blog-card-6');
    }

    public function layoutsBlogCard7()
    {
        return view('pages/layouts-blog-card-7');
    }

    public function layoutsBlogCard8()
    {
        return view('pages/layouts-blog-card-8');
    }

    public function layoutsBlogDetails()
    {
        return view('pages/layouts-blog-details');
    }

    public function layoutsHelp1()
    {
        return view('pages/layouts-help-1');
    }

    public function layoutsHelp2()
    {
        return view('pages/layouts-help-2');
    }

    public function layoutsHelp3()
    {
        return view('pages/layouts-help-3');
    }

    public function layoutsPriceList1()
    {
        return view('pages/layouts-price-list-1');
    }

    public function layoutsPriceList2()
    {
        return view('pages/layouts-price-list-2');
    }

    public function layoutsPriceList3()
    {
        return view('pages/layouts-price-list-3');
    }

    public function layoutsPriceList4()
    {
        return view('pages/layouts-price-list-4');
    }

    public function layoutsInvoice1()
    {
        return view('pages/layouts-invoice-1');
    }

    public function layoutsInvoice2()
    {
        return view('pages/layouts-invoice-2');
    }

    public function layoutsSignIn1()
    {
        return view('pages/layouts-sign-in-1');
    }

    public function layoutsSignIn2()
    {
        return view('pages/layouts-sign-in-2');
    }

    public function layoutsSignUp1()
    {
        return view('pages/layouts-sign-up-1');
    }

    public function layoutsSignUp2()
    {
        return view('pages/layouts-sign-up-2');
    }

    public function layoutsError4041()
    {
        return view('pages/layouts-error-404-1');
    }

    public function layoutsError4042()
    {
        return view('pages/layouts-error-404-2');
    }

    public function layoutsError4043()
    {
        return view('pages/layouts-error-404-3');
    }

    public function layoutsError4044()
    {
        return view('pages/layouts-error-404-4');
    }

    public function layoutsError401()
    {
        return view('pages/layouts-error-401');
    }

    public function layoutsError429()
    {
        return view('pages/layouts-error-429');
    }

    public function layoutsError500()
    {
        return view('pages/layouts-error-500');
    }

    public function layoutsStarterBlurredHeader()
    {
        return view('pages/layouts-starter-blurred-header');
    }

    public function layoutsStarterUnblurredHeader()
    {
        return view('pages/layouts-starter-unblurred-header');
    }

    public function layoutsStarterCenteredLink()
    {
        return view('pages/layouts-starter-centered-link');
    }

    public function layoutsStarterMinimalSidebar()
    {
        return view('pages/layouts-starter-minimal-sidebar');
    }

    public function layoutsStarterSideblock()
    {
        return view('pages/layouts-starter-sideblock');
    }

    public function appsChat()
    {
        return view('pages/apps-chat');
    }

    public function appsAiChat()
    {
        return view('pages/apps-ai-chat');
    }

    public function appsFilemanager()
    {
        return view('pages/apps-filemanager');
    }

    public function appsKanban()
    {
        return view('pages/apps-kanban');
    }

    public function appsList()
    {
        return view('pages/apps-list');
    }

    public function appsMail()
    {
        return view('pages/apps-mail');
    }

    public function appsNft1()
    {
        return view('pages/apps-nft-1');
    }
    public function appsNft2()
    {
        return view('pages/apps-nft-2');
    }

    public function appsPos()
    {
        return view('pages/apps-pos');
    }

    public function appsTodo()
    {
        return view('pages/apps-todo');
    }

    public function appsTravel()
    {
        return view('pages/apps-travel');
    }

    public function appsJobsBoard()
    {
        return view('pages/apps-jobs-board');
    }

    public function dashboardsCrmAnalytics()
    {
        return view('pages/dashboards-crm-analytics');
    }

    public function dashboardsOrders()
    {
        return view('pages/dashboards-orders');
    }

    public function dashboardsCrypto1()
    {
        return view('pages/dashboards-crypto1');
    }

    public function dashboardsCrypto2()
    {
        return view('pages/dashboards-crypto2');
    }

    public function dashboardsBanking1()
    {
        return view('pages/dashboards-banking1');
    }

    public function dashboardsBanking2()
    {
        return view('pages/dashboards-banking2');
    }

    public function dashboardsPersonal()
    {
        return view('pages/dashboards-personal');
    }

    public function dashboardsCmsAnalytics()
    {
        return view('pages/dashboards-cms-analytics');
    }

    public function dashboardsInfluencer()
    {
        return view('pages/dashboards-influencer');
    }

    public function dashboardsTravel()
    {
        return view('pages/dashboards-travel');
    }

    public function dashboardsTeacher()
    {
        return view('pages/dashboards-teacher');
    }

    public function dashboardsAuthors()
    {
        return view('pages/dashboards-authors');
    }

    public function dashboardsEducation()
    {
        return view('pages/dashboards-education');
    }
    public function dashboardsDoctor()
    {
        return view('pages/dashboards-doctor');
    }

    public function dashboardsEmployees()
    {
        return view('pages/dashboards-employees');
    }

    public function dashboardsWorkspaces()
    {
        return view('pages/dashboards-workspaces');
    }

    public function dashboardsMeetings()
    {
        return view('pages/dashboards-meetings');
    }

    public function dashboardsProjectBoards()
    {
        return view('pages/dashboards-project-boards');
    }

    public function dashboardsWidgetUi()
    {
        return view('pages/dashboards-widget-ui');
    }

    public function dashboardsWidgetContacts()
    {
        return view('pages/dashboards-widget-contacts');
    }
}
