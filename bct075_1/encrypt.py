a=str(input())
c=''
b=a.split()
for i in range(len(a)):
    c[i]=ord(b[i])+45
    i=i+1
for i in range(len(a)):
    d=d+char(c[i])
    i=i+1
print(d)