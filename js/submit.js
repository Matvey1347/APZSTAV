class FormValidator {
  static CONST = {
    success: "_success",
    error: "_error",
    messageClass: "form__message",
    messages: {
      formSuccess: "Успешно отправлено",
      formError: "Что-то пошло не так",
      required: "Обязательное поле",
      phone: "Неверный номер телефона",
      email: "Неверный email",
      passwordLength: "Пароль должен быть не менее 8 символов",
    },
    phoneLength: 9,
  };

  constructor(form) {
    this.form = form;
    this.countOfSubmit = 0;
    this.init();
  }

  init() {
    this.form.addEventListener("submit", (e) => {
      e.preventDefault();
      this.handleSubmit();
    });
  }

  handleSubmit() {
    const hasErrors = this.validateForm();

    if (!hasErrors) {
      const callbackName = this.form.getAttribute("data-form-callback");
      if (typeof window[callbackName] === "function") {
        window[callbackName](this.form);
      }
      console.log("😊 form success");
      this.addMessage(
        this.form,
        FormValidator.CONST.messages.formSuccess,
        FormValidator.CONST.success,
      );
    } else {
      console.log("😨 form error");

      this.addMessage(
        this.form,
        FormValidator.CONST.messages.formError,
        FormValidator.CONST.error,
      );
    }
  }

  validateForm() {
    let errors = 0;

    const fieldWraps = this.form.querySelectorAll("[data-form-field]");
    fieldWraps.forEach((wrap) => {
      const field = wrap.querySelector("._req");
      errors += this.validateField(field, wrap);

      if (!this.countOfSubmit) {
        if (field) {
          field.addEventListener("input", () =>
            this.validateField(field, wrap),
          );
          field.addEventListener("change", () =>
            this.validateField(field, wrap),
          );
        }
      }
    });

    // validate Radios and Checkboxes
    errors += this.validateRadios();
    errors += this.validateCheckboxes();

    this.countOfSubmit = 1;
    return errors;
  }

  validateRadios() {
    let errors = 0;
    const radioWraps = this.form.querySelectorAll("[data-radio-wrap]");

    radioWraps.forEach((wrap) => {
      if (!wrap.classList.contains("_req")) return;

      const fieldWrap = wrap.parentElement;
      const radios = wrap.querySelectorAll("[data-radio]");
      radios.forEach((r) => {
        r.classList.remove(FormValidator.CONST.error);
        r.addEventListener("click", () => {
          this.validateForm();
        });
      });
      const active = wrap.querySelector("[data-radio]._active");
      if (!active) {
        this.addError(fieldWrap, FormValidator.CONST.messages.required);
        errors++;
      } else {
        this.removeError(fieldWrap);
        this.addSuccess(fieldWrap);
      }
    });

    return errors;
  }

  validateCheckboxes() {
    let errors = 0;
    const checkboxWraps = this.form.querySelectorAll("[data-checkbox-wrap]");
    checkboxWraps.forEach((wrap) => {
      if (!wrap.classList.contains("_req")) return;

      const fieldWrap = wrap.parentElement;

      const minSelected = +wrap.getAttribute("data-min-selected") || 1;
      const checkboxes = wrap.querySelectorAll("[data-checkbox]");
      checkboxes.forEach((c) => {
        c.classList.remove(FormValidator.CONST.error);
        c.addEventListener("click", () => {
          this.validateForm();
        });
      });
      const activeEls = wrap.querySelectorAll("[data-checkbox]._active");
      if (activeEls.length < minSelected) {
        this.addError(fieldWrap, FormValidator.CONST.messages.required);
        this.removeSuccess(fieldWrap);
        errors++;
      } else {
        this.removeError(fieldWrap);
        this.addSuccess(fieldWrap);
      }
    });

    return errors;
  }

  validateField(field, wrap) {
    if (
      wrap.querySelector("[data-radio-wrap]") ||
      wrap.querySelector("[data-checkbox-wrap]")
    ) {
      return 0;
    }

    let error = 0;
    const type = field?.getAttribute("type");

    if (type === "checkbox") {
      if (!field.checked) {
        this.addError(wrap);
        error = 1;
      } else {
        this.removeError(wrap);
      }
    } else {
      const value = field?.value?.trim();

      const isPhone = type === "tell";
      const isEmail = type === "email";
      const isPassword = !!field?.hasAttribute("data-password-input");

      if (!value) {
        this.removeSuccess(wrap);
        this.addError(wrap, FormValidator.CONST.messages.required);
        error = 1;
      } else if (isPhone && value.length !== FormValidator.CONST.phoneLength) {
        this.removeSuccess(wrap);
        this.addError(wrap, FormValidator.CONST.messages.phone);
        error = 1;
      } else if (isEmail && !this.isValidEmail(value)) {
        this.removeSuccess(wrap);
        this.addError(wrap, FormValidator.CONST.messages.email);
        error = 1;
      } else if (isPassword) {
        if (value.length < 8) {
          this.removeSuccess(wrap);
          this.addError(wrap, FormValidator.CONST.messages.passwordLength);
          error = 1;
        } else {
          this.removeError(wrap);
          this.addSuccess(wrap);
        }
      } else {
        this.removeError(wrap);
        this.addSuccess(wrap);
      }
    }

    return error;
  }

  isValidEmail(value) {
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(value);
  }

  addError(wrap, message = null) {
    wrap.classList.add(FormValidator.CONST.error);
    this.addMessage(wrap, message);
  }

  removeError(wrap) {
    wrap.classList.remove(FormValidator.CONST.error);
    this.removeMessage(wrap);
  }

  addSuccess(wrap) {
    wrap.classList.add(FormValidator.CONST.success);
  }

  removeSuccess(wrap) {
    wrap.classList.remove(FormValidator.CONST.success);
  }

  addMessage(wrap, message, className = "") {
    if (!message) return;

    let el = wrap.querySelector(
      `:scope > .${FormValidator.CONST.messageClass}`,
    );
    if (!el) {
      wrap.insertAdjacentHTML(
        "beforeend",
        `<span class="${FormValidator.CONST.messageClass} ${className}">${message}</span>`,
      );
    } else {
      el.textContent = message;
    }
  }

  removeMessage(wrap) {
    const el = wrap.querySelector(
      `:scope > .${FormValidator.CONST.messageClass}`,
    );
    if (el) el.remove();
  }
}

class Form {
  constructor(form) {
    this.form = form;

    this.init();
  }

  init() {
    this.form._validator = new FormValidator(this.form);
    this.initSelects();
    this.initRadios();
    this.initCheckboxes();
    this.initPasswords();
  }

  initSelects() {
    const selects = this.form.querySelectorAll("select");

    selects.forEach((select) => {
      new Choices(select, {
        searchEnabled: false,
        itemSelectText: "",
        shouldSort: false,
        allowHTML: false,
        placeholder: true,
      });
    });
  }

  initRadios() {
    const radioWraps = this.form.querySelectorAll("[data-radio-wrap]");
    radioWraps.forEach((wrap) => {
      const radios = wrap.querySelectorAll("[data-radio]");
      radios.forEach((radio) => {
        radio.classList.remove(FormValidator.CONST.error);
        radio.addEventListener("click", () => {
          radios.forEach((r) => r.classList.remove("_active"));
          radio.classList.add("_active");
        });
      });
    });
  }

  initCheckboxes() {
    const checkboxWraps = this.form.querySelectorAll("[data-checkbox-wrap]");
    checkboxWraps.forEach((wrap) => {
      const checkboxes = wrap.querySelectorAll("[data-checkbox]");
      checkboxes.forEach((checkbox) => {
        checkbox.classList.remove(FormValidator.CONST.error);
        checkbox.addEventListener("click", () => {
          checkbox.classList.toggle("_active");
        });
      });
    });
  }

  initPasswords() {
    const passwords = this.form.querySelectorAll("[data-password]");
    passwords.forEach((password) => {
      new PasswordInput(password);
    });
  }
}

class PasswordInput {
  constructor(password) {
    this.password = password;
    this.init();
  }

  init() {
    let allViewPass = this.password.querySelectorAll("[data-viewpass]");
    if (allViewPass.length) {
      this.initViewpass(allViewPass);
    }
  }

  initViewpass(allViewPass) {
    for (let index = 0; index < allViewPass.length; index++) {
      const element = allViewPass[index];
      element.addEventListener("click", function (e) {
        const parent = element.parentElement;
        const input = parent.querySelector("input");
        if (element.classList.contains("_active")) {
          input.setAttribute("type", "password");
        } else {
          input.setAttribute("type", "text");
        }
        element.classList.toggle("_active");
        parent.classList.toggle("_active");
      });
    }
  }
}

document.querySelectorAll("[data-form]").forEach((form) => {
  const formEx = new Form(form);
  form._form = formEx;
});

function onSubmit(form) {
  console.log("function onSubmit When no errors", form);
}
