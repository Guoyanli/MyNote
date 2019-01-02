a = '''
'''
b = '''
'''
b = ''.join(b.split('\n'))
f= open( 'create_sql.sql','w')
print(b)
for m in [1,3,5,7,8,10,12]:
    for n in range(1,32):
        mm = '0' * (2-len(str(m))) + str(m)
        nn = '0' * (2-len(str(n))) + str(n)
        sql = a + mm+nn +b
        f.write(sql+'\n')
for m in [4,6,9,11]:
    for n in range(1,31):
        mm = '0' * (2-len(str(m))) + str(m)
        nn = '0' * (2-len(str(n))) + str(n)
        sql = a + mm+nn +b
        f.write(sql+'\n')
m = 2
for n in range(1,29):
    mm = '0' * (2-len(str(m))) + str(m)
    nn = '0' * (2-len(str(n))) + str(n)
    sql = a + mm+nn +b
    f.write(sql+'\n')

f.close()
