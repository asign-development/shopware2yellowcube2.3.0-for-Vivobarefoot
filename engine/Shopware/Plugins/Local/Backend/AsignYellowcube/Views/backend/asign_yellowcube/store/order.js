/**
 * This file defines rows for order store
 *
 * @category  asign
 * @package   AsignYellowcube
 * @author    entwicklung@a-sign.ch
 * @copyright A-Sign
 * @license   https://www.a-sign.ch/
 * @version   2.1
 * @link      https://www.a-sign.ch/
 * @see       Shopware.apps.AsignYellowcube.store.Order
 * @since     File available since Release 1.0
 */

Ext.define('Shopware.apps.AsignYellowcube.store.Order', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',

    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad: false,

    /**
     * Amount of data loaded at once
     * @integer
     */
    pageSize: 50,
    remoteFilter: true,
    remoteSort: true,

    /**
     * Define the used model for this store
     * @string
     */
    model: 'Shopware.apps.AsignYellowcube.model.Order',

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * @object
         */
        api: {
            read: '{url controller="AsignYellowcube" action="getOrders"}'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});
