import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // css
                "resources/scss/app-saas.scss",
                "resources/scss/icons.scss",
                "node_modules/daterangepicker/daterangepicker.css",
                "node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css",
                "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
                "node_modules/fullcalendar/main.min.css",
                "node_modules/select2/dist/css/select2.min.css",
                "node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css",
                "node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css",
                "node_modules/simplemde/dist/simplemde.min.css",
                "node_modules/frappe-gantt/dist/frappe-gantt.min.css",
                "node_modules/quill/dist/quill.core.css",
                "node_modules/quill/dist/quill.bubble.css",
                "node_modules/quill/dist/quill.snow.css",
                "node_modules/jquery-toast-plugin/dist/jquery.toast.min.css",
                "node_modules/jstree/dist/themes/default/style.min.css",
                "node_modules/britecharts/dist/css/britecharts.min.css",

                "node_modules/flatpickr/dist/flatpickr.min.css",
                "node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css",
                "node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css",
                "node_modules/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css",
                "node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css",
                "node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css",
                "node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css",


                // js
                "resources/js/hyper-head.js",
                "resources/js/hyper-config.js",
                "resources/js/hyper-main.js",
                "resources/js/hyper-layout.js",
                "resources/js/hyper-syntax.js",
                "resources/js/pages/demo.dashboard.js",
                "resources/js/pages/demo.dashboard-analytics.js",
                "resources/js/ui/component.todo.js",
                "resources/js/pages/demo.dashboard-projects.js",
                "resources/js/pages/demo.crm-dashboard.js",
                "resources/js/pages/demo.dashboard-wallet.js",
                "resources/js/pages/demo.calendar.js",
                "resources/js/pages/demo.crm-project.js",
                "resources/js/pages/demo.crm-management.js",
                "resources/js/pages/demo.products.js",
                "resources/js/pages/demo.customers.js",
                "resources/js/pages/demo.checkout.js",
                "resources/js/pages/demo.sellers.js",
                "resources/js/pages/demo.inbox.js",
                "resources/js/pages/demo.inbox.js",
                "resources/js/pages/demo.inbox.js",
                "resources/js/pages/demo.project-detail.js",
                "resources/js/pages/demo.project-gantt.js",
                "resources/js/ui/component.fileupload.js",
                "resources/js/pages/demo.tasks.js",
                "resources/js/ui/component.dragula.js",
                "resources/js/pages/demo.profile.js",
                "resources/js/ui/component.chat.js",
                "resources/js/pages/demo.toastr.js",
                "resources/js/ui/component.range-slider.js",
                "resources/js/ui/component.rating.js",
                "resources/js/pages/demo.jstree.js",
                "resources/js/pages/demo.widgets.js",
                "resources/js/pages/demo.remixicons.js",
                "resources/js/pages/demo.materialdesignicons.js",
                "resources/js/pages/demo.sparkline.js",
                "resources/js/pages/demo.britechart.js",
                "resources/js/pages/demo.form-wizard.js",
                "resources/js/pages/demo.quilljs.js",
                "resources/js/pages/demo.simplemde.js",
                "resources/js/pages/demo.apex-area.js",
                "resources/js/pages/demo.apex-bar.js",
                "resources/js/pages/demo.apex-bubble.js",
                "resources/js/pages/demo.apex-candlestick.js",
                "resources/js/pages/demo.apex-column.js",
                "resources/js/pages/demo.apex-heatmap.js",
                "resources/js/pages/demo.apex-line.js",
                "resources/js/pages/demo.apex-mixed.js",
                "resources/js/pages/demo.apex-timeline.js",
                "resources/js/pages/demo.apex-boxplot.js",
                "resources/js/pages/demo.apex-treemap.js",
                "resources/js/pages/demo.apex-pie.js",
                "resources/js/pages/demo.apex-radar.js",
                "resources/js/pages/demo.apex-radialbar.js",
                "resources/js/pages/demo.apex-scatter.js",
                "resources/js/pages/demo.apex-polar-area.js",
                "resources/js/pages/demo.apex-sparklines.js",
                "resources/js/pages/demo.chartjs-area.js",
                "resources/js/pages/demo.chartjs-bar.js",
                "resources/js/pages/demo.chartjs-line.js",
                "resources/js/pages/demo.chartjs-other.js",

                "resources/js/pages/demo.form-advanced.js",
                "resources/js/pages/demo.datatable-init.js",
                "resources/js/pages/demo.google-maps.js",
                "resources/js/pages/demo.vector-maps.js"
            ],
            refresh: true,
        }),
    ],
});
