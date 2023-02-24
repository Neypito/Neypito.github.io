users = {}

def register():
    print("Please fill out the following information to register:")
    email = input("Email: ")
    if email in users:
        print("Error: Email already registered.")
        return
    nickname = input("Nickname: ")
    password = input("Password: ")
    users[email] = {"nickname": nickname, "password": password}
    print("Registration complete.")

register()
print(users)
