## Schatzmann_Base
***
### Description
Schatzmann_Base it's the core module for Schatzmann extensions.

### Configuration
To enable Schatzmann extensions, go to `Store > Configuration > Schatzmann > Base > Enable Schatzmann Extensions` and set to `yes`.

### Common Functionalities
This module will provide common functionalities to other Schatzmann extensions. Below, a list with the current available functionalities:

<details>
<summary>Copy to Clipboard</summary>
<p>

1. ###### Description
The main objective of this component is to provide a way to automatic "click and copy" text from some inputs.

2.  ###### Structure
As a custom Ui Component, it can be declared anywhere and its main functionality is defined by a .js file

- ``` Schatzmann_Base/view/frontend/web/js/view/copy-to-clipboard.js ```

and a template file that will be rendered once the component is called

- ``` Schatzmann_Base/view/frontend/web/template/view/copy-to-clipboard.html ```

3. ###### Example

```
    <form id="my-form">
        <fieldset class="fieldset">
            ...
                <div class="field field-custom">
                    <input type="text" id="my-custom-input" readonly="readonly" value="my-custom-value"/>
                    <div data-bind="scope: 'copy-to-clipboard'">
                        <!-- ko template: getTemplate() --><!-- /ko -->
                    </div>
                    <script type="text/x-magento-init">
                        {
                            "*": {
                                "Magento_Ui/js/core/app": {
                                    "components": {
                                        "copy-to-clipboard": {
                                            "component": "Schatzmann_Base/js/view/copy-to-clipboard",
                                            "target": "#my-custom-input"
                                        }
                                    }
                                }
                            }
                        }
                    </script>
                </div>
            ...
        </fieldset>
    </form>
```

4. ###### Notes

- While declaring the component, the "target" argument is required. This argument will be the **id** or **class** of the input that will be copied.

- When declaring multiple inputs that will have this feature, always call separated components to make sure that they will not conflict.

</details>

***
### Contact
If you have any doubt or suggestions, contact me by [E-mail](vpjoao98@gmail.com) or send me a message on [LinkedIn](https://www.linkedin.com/in/joaovp/).
